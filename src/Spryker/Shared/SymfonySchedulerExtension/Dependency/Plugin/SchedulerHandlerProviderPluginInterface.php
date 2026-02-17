<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Shared\SymfonySchedulerExtension\Dependency\Plugin;

interface SchedulerHandlerProviderPluginInterface
{
    /**
     * Specification:
     * - Returns an array where the key is the message class name and the value is the array of callables that handles the message.
     * - Each message class should be mapped to a handler that will process recurring scheduled messages.
     * - The handler callable receives the message object as a parameter.
     *
     * @api
     *
     * @example
     * return [
     *     RecurringOrderExportMessage::class => [[$this, 'handleOrderExport'],]
     *     RecurringInventorySyncMessage::class => [function(RecurringInventorySyncMessage $message) { ... },]
     *     RecurringReportGenerationMessage::class => [new ReportGenerationHandler(),]
     * ]
     *
     * @return array<string, array<callable>>
     */
    public function getHandlers(): array;

    /**
     * Specification:
     * - Returns an array of schedules with recurring messages or data to create them. The key is an unique name for each schedule.
     * - The schedule defines when and how messages should be triggered.
     * - The name of the schedule will be used to autoconfigure transport for a message that is mapped to this schedule.
     *
     * @api
     *
     * @return array<string, \Symfony\Component\Scheduler\Schedule>
     */
    public function getSchedules(): array;
}
