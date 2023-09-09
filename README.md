

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

Create a custom cron by clicking: https://sbdevblog.com/magento-2-create-custom-cron/

Create a custom message queue by clicking: https://sbdevblog.com/magento-2-how-to-create-a-message-queue/
        

