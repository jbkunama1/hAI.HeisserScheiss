# 🔥 Heisser Scheiss - TheRealTeacher Collection [![GitHub stars](https://img.shields.io/github/stars/TheRealTeacher/heisser-scheiss?style=social)](https://github.com/TheRealTeacher/heisser-scheiss)

<div align="center">
  <img src="hotstuff.png" alt="Logo" width="128" height="128">
  <h1>🚀 Deine zentrale Sammlung für Anleitungen, Bilder & Links</h1>
  <p><strong>Vollständig funktionsfähige Web-App mit SQLite-Backend</strong> für Lehrer, Technik-Enthusiasten & IoT-Projekte</p>
  
  ![PHP](https://img.shields.io/badge/PHP-7.4+-777BB4?style=flat&logo=php&logoColor=white)
  ![SQLite](https://img.shields.io/badge/SQLite-3.0+-74EBD5?style=flat&logo=sqlite&logoColor=white)
  ![Responsive](https://img.shields.io/badge/Responsive-✅-10B981?style=flat)
  ![Dark%20Mode](https://img.shields.io/badge/Dark%20Mode-✅-10B981?style=flat)
  ![License](https://img.shields.io/badge/License-MIT-yellow.svg)
</div>

## ✨ Hauptfeatures

| Feature | Status | Beschreibung |
|---------|--------|-------------|
| 📝 **Text/Anleitungen** | ✅ | Lange Texte & Schritt-für-Schritt-Anleitungen |
| 🖼️ **Bilder** | ✅ | Direkte Bildvorschau (Base64) |
| 🔗 **Links** | ✅ | Klickbare URLs mit Vorschau |
| 💾 **SQLite Backend** | ✅ | Automatische DB-Erstellung |
| 🔐 **Passwortschutz** | ✅ | `hotstuff` (server-seitig) |
| 📱 **Responsive** | ✅ | Mobile & Desktop |
| 🌙 **Dark/Light Mode** | ✅ | Automatisch |
| 🔍 **Suche & Filter** | ✅ | Volltextsuche + Kategorien |
| 💾 **Export** | ✅ | JSON-Backup |

## 🚀 Blitz-Schnelle Installation (15 Sekunden)

```bash
# 1. Dateien herunterladen
index.html     # Frontend
api.php        # Backend  
hotstuff.png   # Logo (optional)

# 2. Auf Webserver hochladen
# 3. index.html öffnen → FERTIG!
```

### Server-Anforderungen
✅ PHP 7.4+ mit PDO/SQLite
✅ Schreibrechte für .db Datei
✅ Webserver (Apache/Nginx)
❌ Keine MySQL/PostgreSQL nötig

text

## 📱 Demo-Screenshots

<div align="center">
  <img src="https://via.placeholder.com/800x400/e67e61/fcfcf9?text=Dashboard+🔥" alt="Dashboard" width="32%">
  <img src="https://via.placeholder.com/800x400/e67e61/fcfcf9?text=Mobile+View+📱" alt="Mobile" width="32%">
  <img src="https://via.placeholder.com/800x400/1f2121/f5f5f5?text=Dark+Mode+🌙" alt="Dark Mode" width="32%">
</div>

## 🛠️ Verwendung

### 1. **Neuer Eintrag** ➕
Kategorie wählen → Inhalt → Speichern

text

### 2. **Bearbeiten/Löschen**
✏️ Bearbeiten | 🗑️ Löschen (in Card)

text

### 3. **Suche & Filter** 🔍
Suchfeld + Tabs (Alle/Text/Bilder/Links)

text

## 🔐 Sicherheit
🔒 Passwort: hotstuff (api.php)
🔐 Server-seitige Prüfung
🌐 CORS: Alle Domains
📱 CSRF: POST-only
🛡️ SQLite: Datei-spezifisch

text

**Passwort ändern** (`api.php` Zeile 33):
```php
$correctPassword = 'dein-passwort';
```

## 📂 Ordnerstruktur
heisser-scheiss/
├── 📄 index.html # 🎨 Frontend
├── ⚙️ api.php # 🗄️ Backend
├── 🖼️ hotstuff.png # 🎨 Logo
├── 🗄️ heisser-scheiss.db # 💾 DB (auto)
└── 📄 README.md # 📖 Docs

text

## 🐛 Troubleshooting

| ❌ Problem | ✅ Lösung |
|-----------|----------|
| "Nicht verbunden" | PHP/SQLite + Schreibrechte |
| "Falsches Passwort" | `hotstuff` eingeben |
| Bilder fehlen | Base64-Größe prüfen |
| DB-Fehler | `chmod 755 *.db` |

## 🎨 Anpassungen

### Farben (`index.html`)
```css
--color-fire: #your-color;
```

### Kategorien erweitern
```html
<option value="videos">🎥 Videos</option>
```

## 📊 Tech-Stack

```yaml
Frontend: HTML/CSS/JS (Vanilla)
Backend: PHP + SQLite3
Design: CSS Grid/Flexbox
Responsive: Mobile-First
Size: < 50KB
```

## 🤝 Contributing

1. ⭐ Star geben
2. Fork erstellen
3. PR machen

**Ideen:**
- PWA-Support
- User-Management
- Datei-Upload

## 📄 Lizenz

[![MIT License](https://img.shields.io/badge/License-MIT-yellow.svg)](LICENSE)

---
**👨‍🏫 Made by TheRealTeacher**  
*Sport- & Techniklehrer | Karlsruhe/BW | IoT-Projekte*

<div align="center">
  <a href="https://github.com/TheRealTeacher/heisser-scheiss/issues">
    <img src="https://img.shields.io/github/issues/TheRealTeacher/heisser-scheiss" alt="Issues">
  </a>
</div>
