

In order to install module, you can do it two ways:

    Install By Composer
        Take clone
        run composer require sbdevblog/module-sbdevblog-crons
        Run necessary magento commands like setup:upgrade, di:compile, static-content:deploy
    Install From App/Code
        Clone and Just extract zip and paste SbDevBlog/Crons directory inside app/code
        Run necessary magento commands like setup:upgrade, di:compile, static-content:deploy

    Command to run cron:
        php bin/magento cron:run

    Run specific group
        php bin/magento cron:run --group=GROUP

        

