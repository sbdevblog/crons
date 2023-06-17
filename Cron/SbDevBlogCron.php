<?php
/**
 * @copyright Copyright (c) sbdevblog (https://www.sbdevblog.com)
 */
namespace SbDevBlog\Crons\Cron;

use Psr\Log\LoggerInterface;

class SbDevBlogCron
{
    /**
     * @var LoggerInterface
     */
    private LoggerInterface $logger;

    /**
     * Constructor
     *
     * @param LoggerInterface $logger
     */
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * Cron job
     *
     * @return void
     */
    public function execute(): void
    {
        $this->logger->info("Cron Job Executed");
    }
}
