<?php
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    exit;
}

$dbFile = __DIR__ . '/heisser-scheiss.db';
$correctPassword = 'hotstuff';

try {
    $db = new PDO('sqlite:' . $dbFile);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $db->exec("CREATE TABLE IF NOT EXISTS items (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        title TEXT NOT NULL,
        category TEXT NOT NULL,
        content TEXT DEFAULT '',
        link TEXT DEFAULT '',
        image TEXT DEFAULT '',
        created_at TEXT NOT NULL,
        updated_at TEXT NOT NULL
    )");
} catch (PDOException $e) {
    echo json_encode(['success' => false, 'message' => 'Datenbankfehler: ' . $e->getMessage()], JSON_UNESCAPED_UNICODE);
    exit;
}

$input = json_decode(file_get_contents('php://input'), true) ?: [];
$action = $input['action'] ?? '';
$password = $input['password'] ?? '';

if ($password !== $correctPassword) {
    echo json_encode(['success' => false, 'message' => 'Falsches Passwort'], JSON_UNESCAPED_UNICODE);
    exit;
}

try {
    if ($action === 'test') {
        echo json_encode(['success' => true, 'message' => 'Verbindung OK'], JSON_UNESCAPED_UNICODE);
        exit;
    }

    if ($action === 'getAll') {
        $stmt = $db->query('SELECT * FROM items ORDER BY created_at DESC');
        echo json_encode(['success' => true, 'items' => $stmt->fetchAll()], JSON_UNESCAPED_UNICODE);
        exit;
    }

    if ($action === 'create') {
        $item = $input['item'] ?? [];
        $now = date('Y-m-d H:i:s');
        $stmt = $db->prepare('INSERT INTO items (title, category, content, link, image, created_at, updated_at) VALUES (:title, :category, :content, :link, :image, :created_at, :updated_at)');
        $stmt->execute([
            ':title' => $item['title'] ?? '',
            ':category' => $item['category'] ?? '',
            ':content' => $item['content'] ?? '',
            ':link' => $item['link'] ?? '',
            ':image' => $item['image'] ?? '',
            ':created_at' => $now,
            ':updated_at' => $now
        ]);
        echo json_encode(['success' => true, 'message' => 'Eintrag erstellt', 'id' => $db->lastInsertId()], JSON_UNESCAPED_UNICODE);
        exit;
    }

    if ($action === 'update') {
        $item = $input['item'] ?? [];
        $now = date('Y-m-d H:i:s');
        $stmt = $db->prepare('UPDATE items SET title = :title, category = :category, content = :content, link = :link, image = :image, updated_at = :updated_at WHERE id = :id');
        $stmt->execute([
            ':title' => $item['title'] ?? '',
            ':category' => $item['category'] ?? '',
            ':content' => $item['content'] ?? '',
            ':link' => $item['link'] ?? '',
            ':image' => $item['image'] ?? '',
            ':updated_at' => $now,
            ':id' => $item['id'] ?? 0
        ]);
        echo json_encode(['success' => true, 'message' => 'Eintrag aktualisiert'], JSON_UNESCAPED_UNICODE);
        exit;
    }

    if ($action === 'delete') {
        $stmt = $db->prepare('DELETE FROM items WHERE id = :id');
        $stmt->execute([':id' => $input['id'] ?? 0]);
        echo json_encode(['success' => true, 'message' => 'Eintrag gelöscht'], JSON_UNESCAPED_UNICODE);
        exit;
    }

    echo json_encode(['success' => false, 'message' => 'Unbekannte Aktion'], JSON_UNESCAPED_UNICODE);
} catch (PDOException $e) {
    echo json_encode(['success' => false, 'message' => 'Fehler: ' . $e->getMessage()], JSON_UNESCAPED_UNICODE);
}
