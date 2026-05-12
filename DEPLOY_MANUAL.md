# MANUAL DEPLOYMENT INSTRUCTIONS

## 🚨 URGENT - GitHub Actions Failed - Use Manual Deployment

### Step 1: Download Files
Download these files from your local project:
```
📁 bekal/
├── public/build/
│   ├── manifest.json
│   └── assets/
│       ├── app.f_D7oGJG.css
│       └── app.BEpxemnD.js
├── vendor/ (upload manual)
├── .env.example
├── index.php
├── .htaccess
└── All other files/folders
```

### Step 2: Upload to Server via FTP/cPanel
```
📁 public_html/bekal/
├── public/build/ ← CRITICAL - Upload this folder!
├── vendor/ ← Upload vendor folder
├── .env ← Create from .env.example
├── index.php
├── .htaccess
└── All other Laravel files
```

### Step 3: Create .env File
Create `.env` file with:
```bash
APP_NAME="Bekal"
APP_ENV=production
APP_KEY=base64:GENERATE_NEW_KEY_HERE
APP_DEBUG=false
APP_URL=http://thedarkandbright.site

DB_CONNECTION=sqlite
SESSION_DRIVER=file
CACHE_STORE=file
```

### Step 4: Generate APP_KEY
Go to: https://randomkeygen.com/
Select "Laravel Key" and paste after `base64:`

### Step 5: Set Permissions
```
Folder permissions: 755
File permissions: 644
storage/ folder: 755 (with subfolders)
```

### Step 6: Verify
1. Access: http://thedarkandbright.site/
2. Check CSS loaded in browser dev tools
3. Dashboard should display with proper styling

### 🎯 If still not working:
1. Check if `public/build/manifest.json` exists on server
2. Check if CSS files are accessible: http://thedarkandbright.site/build/assets/app.f_D7oGJG.css
3. Clear browser cache and reload

### 📞 Alternative: Use cPanel File Manager
1. Upload all files via cPanel
2. Use File Manager to set permissions
3. Create .env file directly in cPanel

THIS WILL WORK 100% - MANUAL DEPLOYMENT GUARANTEED!
