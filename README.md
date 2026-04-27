# 🔥 Heisser Scheiss - TheRealTeacher Collection

> Eine kompakte Web-App zum Speichern von **Anleitungen**, **Bildern** und **Links** mit **PHP + SQLite** – ohne MySQL, ohne komplizierte Einrichtung, direkt auf dem Server einsetzbar.

<div align="center">
  <img src="hotstuff.png" alt="Heisser Scheiss Logo" width="140">
  <br><br>
  <img src="https://img.shields.io/badge/PHP-7.4+-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP Badge">
  <img src="https://img.shields.io/badge/SQLite-3-blue?style=for-the-badge&logo=sqlite&logoColor=white" alt="SQLite Badge">
  <img src="https://img.shields.io/badge/Vanilla-JS-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black" alt="JavaScript Badge">
  <img src="https://img.shields.io/badge/Responsive-Yes-10B981?style=for-the-badge" alt="Responsive Badge">
  <img src="https://img.shields.io/badge/Dark%20Mode-Auto-111827?style=for-the-badge" alt="Dark Mode Badge">
  <img src="https://img.shields.io/badge/License-MIT-green?style=for-the-badge" alt="MIT Badge">
</div>

---

## ✨ Überblick

**Heisser Scheiss** ist eine einfache, schnelle und praktische Sammlung für Unterricht, Technikprojekte, Materialideen und Web-Fundstücke. Die App speichert Inhalte direkt in einer **SQLite-Datenbank**, die automatisch erzeugt wird, sobald die `api.php` läuft.

Perfekt geeignet für:
- 👨‍🏫 Lehrkräfte
- 🛠️ Technik- und Maker-Projekte
- 🌐 Linksammlungen
- 🖼️ Bildideen und Inspirationen
- 📝 Anleitungen und Notizen

---

## 🚀 Features

| Bereich | Beschreibung |
|---|---|
| 📝 Text | Anleitungen, Notizen, Beschreibungen speichern |
| 🖼️ Bilder | Bilder direkt hochladen und anzeigen |
| 🔗 Links | Webseiten und Ressourcen sammeln |
| ✏️ Bearbeiten | Alle Einträge nachträglich editierbar |
| 🗑️ Löschen | Einträge direkt entfernen |
| 🔍 Suche | Schnelles Filtern über Titel, Text und Links |
| 📚 Kategorien | Ansicht nach Text, Bilder, Links oder Alle |
| 💾 Export | JSON-Export der Daten |
| 🔐 Passwortschutz | Zugriff nur mit festem Passwort |
| 🗄️ SQLite | Automatische `.db`-Datei ohne extra Datenbankserver |
| 🌙 Dark Mode | Automatische Anpassung an Systemdesign |
| 📱 Responsive | Läuft auf Desktop, Tablet und Smartphone |

---

## 🧰 Verwendeter Stack

```txt
Frontend: HTML, CSS, Vanilla JavaScript
Backend: PHP
Datenbank: SQLite
Logo: hotstuff.png
Speicherdatei: heisser-scheiss.db
```

---

## 📦 Projektstruktur

```txt
heisser-scheiss/
├── index.html
├── api.php
├── hotstuff.png
├── README.md
└── heisser-scheiss.db   # wird automatisch erzeugt
```

---

## ⚙️ Installation

### 1. Dateien hochladen
Lade diese Dateien in **denselben Ordner** auf deinen Webserver:

- `index.html`
- `api.php`
- `hotstuff.png`
- `README.md`

### 2. Voraussetzungen prüfen
Dein Server braucht:

- PHP **7.4 oder höher**
- aktiviertes **PDO SQLite**
- Schreibrechte im Ordner für die Datenbankdatei

### 3. App öffnen
Öffne einfach die `index.html` im Browser.

Die App verbindet sich automatisch mit:

```txt
api.php
```

Die Datenbankdatei wird automatisch angelegt:

```txt
heisser-scheiss.db
```

---

## 🔐 Sicherheit

Der Zugriff auf die API ist per Passwort geschützt.

```txt
Passwort: hotstuff
```

Das Passwort ist aktuell fest in der `index.html` und `api.php` hinterlegt.

### Passwort ändern
Wenn du das Passwort anpassen willst, ändere es an **beiden Stellen**:

#### In der `api.php`
```php
$correctPassword = 'hotstuff';
```

#### In der `index.html`
```javascript
const apiPassword = 'hotstuff';
```

---

## 🖼️ Kategorien

### 📝 Text
Für Anleitungen, Unterrichtsideen, Ablaufbeschreibungen, Notizen oder Erklärungen.

### 🖼️ Bilder
Für Bildmaterial, Inspirationen, Screenshots oder Projektfotos.

### 🔗 Links
Für Webseiten, Tools, Tutorials, Ressourcen oder externe Materialien.

---

## 🧪 So funktioniert die App

### Verbindung
Beim Laden der Seite wird automatisch geprüft, ob die `api.php` erreichbar ist.

### Laden
Wenn die Verbindung steht, werden alle Einträge aus der SQLite-Datenbank geladen.

### Speichern
Neue oder bearbeitete Einträge werden per PHP in der SQLite-Datei gespeichert.

### Bearbeiten
Ein Klick auf eine Karte öffnet den Datensatz wieder im Formular.

### Löschen
Einträge können direkt per Lösch-Button entfernt werden.

### Export
Alle aktuell geladenen Daten können als JSON exportiert werden.

---

## 📱 Oberfläche

### Header
- großes Logo links oben (`hotstuff.png`)
- Titel der Sammlung
- Verbindungsstatus
- Button für neue Einträge
- Export-Button

### Inhalt
- Suchfeld
- Kategorie-Tabs
- Kartenansicht aller Einträge

### Modal
- Formular für neue Einträge
- Formular zum Bearbeiten vorhandener Inhalte

---

## 🎨 Design

Die Oberfläche ist bewusst schlicht und klar gehalten:

- warme Grundfarben
- gut lesbare Typografie
- responsive Kartenlayout
- reduzierte Oberfläche
- automatischer Hell-/Dunkelmodus

---

## 📸 GitHub-Vorschau

Wenn du möchtest, kannst du später noch eigene Screenshots ergänzen:

```md
![Screenshot Dashboard](docs/screenshot-dashboard.png)
![Screenshot Mobile](docs/screenshot-mobile.png)
```

Optional kannst du dafür einen Ordner `docs/` im Repository anlegen.

---

## 🛠️ Typische Anpassungen

### Logo austauschen
Ersetze einfach die Datei:

```txt
hotstuff.png
```

### Titel ändern
In der `index.html` kannst du Titel und Untertitel anpassen.

### Kategorien erweitern
Wenn du weitere Kategorien willst, kannst du diese in:
- HTML-Auswahlfeld
- Filter-Tabs
- Render-Logik
- API / Datenstruktur

ergänzen.

### Passwort anpassen
Siehe Abschnitt **Sicherheit**.

---

## 🐛 Troubleshooting

| Problem | Ursache | Lösung |
|---|---|---|
| Keine Verbindung | `api.php` nicht erreichbar | Prüfen, ob beide Dateien im selben Ordner liegen |
| DB-Fehler | keine Schreibrechte | Ordnerrechte bzw. Dateirechte prüfen |
| Leere Seite | PHP oder SQLite fehlt | PHP-Konfiguration des Servers prüfen |
| Falsches Passwort | Passwort ungleich in HTML/PHP | Passwort in beiden Dateien angleichen |
| Bilder zu groß | sehr große Base64-Daten | Bilder vor Upload verkleinern |

---

## 💡 Einsatzideen

- Sammlung von Unterrichtsmaterialien
- Linksammlung für Medienbildung
- Bilddatenbank für Technikunterricht
- Dokumentation von Maker-Projekten
- Ideenspeicher für BO / WBS / Informatik
- persönliches Nachschlagewerk für Tools und Ressourcen

---

## 🔖 Tags

`php` `sqlite` `html` `javascript` `css` `teacher-tools` `unterricht` `education` `materialsammlung` `linksammlung` `bildersammlung` `knowledge-base` `vanilla-js` `responsive` `dark-mode`

---

## 📄 Lizenz

Dieses Projekt kann unter der **MIT-Lizenz** verwendet, angepasst und weiterentwickelt werden.

---

## 🙌 Autor

**TheRealTeacher**

Praxisnahe Tools für Unterricht, Technikprojekte und digitale Organisation.

---

## ⭐ Hinweis

Wenn dir das Projekt gefällt, gib dem Repository gerne einen Stern auf GitHub.
