# Install GitHub Updater
A drop-in class to install / activate the GitHub Updater plugin

## How it works
This drop-in checks to see if the GitHub Updater plugin is installed. If not installed, it will display an `Install Now` link, which will automatically install and activate the plugin.

<img src="http://i.imgur.com/SwutQJx.gif" width="536" height="239" />

If GitHub Updater is installed but not activated, the user will be prompted to `Activate Now`. If the the admin notice is dismissed, it will not appear again for 7 days.

## Usage
1. Add `install-github-updater.php` into your theme or plugin directory
2. `include( '/path/to/install-github-updater.php' );`
3. To enable automatic updates for your plugin or theme, see the <a href="https://github.com/afragen/github-updater#description">GitHub Updater docs</a>
