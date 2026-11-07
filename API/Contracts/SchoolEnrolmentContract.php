<?php

declare(strict_types=1);

namespace Plugins\SchoolEnrolment\API\Contracts;

/**
 * Published contract for `school.enrolment`.
 *
 * Registration, approvals, access granting, status transitions, transfers, expulsions and reintegration.
 *
 * Legacy source : register_*.php, student_registration*.php, inscriptionniste/, access_approvals.php, *_status_action.php, execute_transfer.php
 * Legacy tables : student_expulsions, approvals, transfer_alerts, deleted_accounts
 *
 * Consumers declare `"requires": ["school.enrolment"]` and resolve THIS interface.
 * Nothing outside this plugin may touch its internals — those are bound with
 * `bindInternal()` and throw `ScopeViolationException` cross-scope.
 *
 * @see docs/PORT.md in this repository for what still has to be ported.
 */
interface SchoolEnrolmentContract
{
    // Methods are added as each legacy use case is ported. Keep this surface
    // minimal: one method per use case the OUTSIDE world needs, never a
    // pass-through to a repository.
}
