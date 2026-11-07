# hkm-plugin-school-enrolment

> Solves **`school.enrolment`** · namespace **`Plugins\SchoolEnrolment\`** · on-demand GDA module
> Family: Elimu / school domain

Registration, approvals, access granting, status transitions, transfers, expulsions and reintegration.

## Status

**Scaffold.** The domain is declared and the contract is published, but no use
case is implemented yet. `SchoolEnrolmentContract` is deliberately empty — methods are added
one per ported use case.

## Where it comes from

| | |
|---|---|
| Legacy source | `register_*.php, student_registration*.php, inscriptionniste/, access_approvals.php, *_status_action.php, execute_transfer.php` |
| Legacy tables | `student_expulsions, approvals, transfer_alerts, deleted_accounts` |

The port plan, the reconstructed domain model and the per-plugin recipe live in
the **ElimuSystem** repository: `PORT-PLAN.md` and `PLUGIN-PLAN.md`.

## Requires

- `database.management`
- `audit.trail`
- `school.people`
- `school.classes`

Declared as module **domains**, never port or contract class names. An unknown
domain fails the boot.

## Using it

```jsonc
// the consumer's module.json / proj.json
{ "requires": ["school.enrolment"] }
```

```php
$svc = $container->make(\Plugins\SchoolEnrolment\API\Contracts\SchoolEnrolmentContract::class);
```

## Installing

```bash
hkm plugins enable SchoolEnrolment <project>
```
