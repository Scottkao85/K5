# K5 README

## To begin setting up your local dev environment, follow the installation setup here:

https://codex.wordpress.org/Installing_WordPress_Locally_on_Your_Mac_With_MAMP

## These are the specific MAMP settings you should be using:
* Wordpress location: /Applications/MAMP/htdocs/wordpress
* PHP settings: 7.0.15
* Database: wordpress_local
* Database prefix: k5_

## Setting up this repo:
* This repo should live in your themes folder of your local installation of wordpress
	* Example: /Applications/MAMP/htdocs/wordpress/wp-content/themes/
* We'll keep track of a list of issues in bitbucket: https://bitbucket.org/maindishmeg/k5/issues?status=new&status=open
	* Nice to have would be standard git commit messages, but no worries if we forget
		* feat: A new feature
		* fix: A bug fix
		* docs: Documentation only changes
		* style: Changes that do not affect the meaning of the code (white-space, formatting, missing semi-colons, etc)
		* refactor: A code change that neither fixes a bug nor adds a feature
		* perf: A code change that improves performance
		* test: Adding missing tests
		* chore: Changes to the build process or auxiliary tools and libraries such as documentation generation
		* Example: git commit -m 'feat(): adding overview page build'
* Optional is the use of git-ftp to add our commits to the beta site
	* Check the documentation: https://github.com/git-ftp/git-ftp
	* Our settings are in Google Drive

## SASS
* Let's get this set up then doc anything we need to in the README.
