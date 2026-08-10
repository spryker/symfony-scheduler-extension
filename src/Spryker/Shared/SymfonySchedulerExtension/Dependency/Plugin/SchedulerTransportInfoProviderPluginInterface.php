<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Shared\SymfonySchedulerExtension\Dependency\Plugin;

interface SchedulerTransportInfoProviderPluginInterface
{
    /**
     * Specification:
     * - Returns transport info for the provided schedules where the key is the schedule (transport) name.
     * - Each value is a `MessengerTransportConfigTransfer` carrying at least the priority for the schedule.
     * - Used to enrich the auto-configured scheduler transports with additional information that cannot be derived from `getSchedules()`.
     *
     * @api
     *
     * @return array<string, \Generated\Shared\Transfer\MessengerTransportConfigTransfer>
     */
    public function getTransportInfo(): array;
}
