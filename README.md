# Usage

    cp .env.example .env

Populate your tokens and user ids

    composer install

    php scripts/01_create_db.php
    php scripts/02_add_elo.php
    php scripts/03_game_who_won.php
    php scripts/04_user_name.php
    php scripts/05_previous_elo.php
    php scripts/06_last_played.php
    php scripts/07_one_on_one_games.php
    php scripts/08_players_needed.php

    $ php -S localhost:80 index.php

Add bot to Slack bots

Invite to channel

    !help // Into slack channel

# Setup
### Host it
    
    Subscribe to `channel.message` event
    
    Enable events path to "{yoursite}/event"
    
    Same with actions "{yoursite}/action"

# Requirements
 - php7+
 - sqlite
    
    
    sudo apt-get install php5-sqlite3
