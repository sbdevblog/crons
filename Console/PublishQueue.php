<?php
/**
 * @copyright Copyright (c) sbdevblog (https://www.sbdevblog.com)
 */
namespace SbDevBlog\Crons\Console;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Magento\Framework\MessageQueue\PublisherInterface;
use Symfony\Component\Console\Input\InputOption;

class PublishQueue extends Command
{
    private const QUEUE_IDENTFIER = "sbdevblog.consumer.example";
    private const ARG_QUEUE = "queue_to_publish";
    private const QUEUE_PAYLOAD = "queue_payload";

    /**
     * @var PublisherInterface
     */
    private PublisherInterface $publisher;

    /**
     * Constructor
     *
     * @param PublisherInterface $publisher
     * @param string|null $name
     */
    public function __construct(
        PublisherInterface $publisher,
        string             $name = null
    ) {
        $this->publisher = $publisher;
        parent::__construct($name);
    }

    /**
     * Configure command
     *
     * @return void
     */
    protected function configure()
    {
        $this->setName("sbdevblog:publish_queue")
            ->setDescription("Publish your queue");

        $this->setDefinition([
            new InputOption(
                self::ARG_QUEUE,
                'sbq',
                InputOption::VALUE_OPTIONAL,
                __("Queue Identifier")
            ),
            new InputOption(
                self::QUEUE_PAYLOAD,
                'sbp',
                InputOption::VALUE_OPTIONAL,
                __("Pass PayLoad must be string or JSON")
            )
        ]);
        parent::configure();
    }

    /**
     * Resetting index by key
     *
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return void
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $queue = $input->getOption(self::ARG_QUEUE) ? $input->getOption(self::ARG_QUEUE) : self::QUEUE_IDENTFIER;
        $payLoad = $input->getOption(self::QUEUE_PAYLOAD) ? $input->getOption(self::QUEUE_PAYLOAD) : "";
        $this->publisher->publish($queue, $payLoad);
        $output->writeln(__("Queue with identifier  %1 published", $queue));
    }
}
