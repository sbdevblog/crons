<?php
/**
 * @copyright Copyright (c) sbdevblog (https://www.sbdevblog.com)
 */
namespace SbDevBlog\Crons\Model;

use Psr\Log\LoggerInterface;

class Consumer
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
     * Executing consumer queue
     *
     * @return void
     */
    public function process()
    {
        $this->logger->info("We have executed the queue successfully");
    }
}
