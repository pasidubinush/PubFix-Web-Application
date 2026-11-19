# Worker Module Progress

## Existing Architecture

- Laravel `^13.17` application with PHP `^8.3`, Blade views, Eloquent models, session authentication, Vite, and Tailwind CSS `^4.0`.
- Frontend assets are built through `vite.config.js` using `resources/css/app.css` and `resources/js/app.js`.
- Existing authentication uses one `web` guard and one `User` model.
- Role values are defined by `App\Enums\UserRole`: `customer`, `handyman`, and `admin`.
- `RoleMiddleware` exists, but only customer routes are currently registered.
- The existing Worker domain object is `Handyman`, linked one-to-one with `User`.
- Existing relationships cover users, handymen, categories, bookings, and customer reviews.
- `JobRequest`, `Worker`, and `WorkerService` exist as empty placeholders. No Worker routes or usable Worker controller logic exist.

## Database Findings

- `handymen` stores `user_id`, `category_id`, `hourly_rate`, `bio`, `city`, coordinates, and an `available` boolean.
- `bookings` stores customer, handyman, description, booking date/time, and status.
- Booking statuses are currently `pending`, `confirmed`, `completed`, and `cancelled`.
- `reviews` belongs to a booking, customer, and handyman.
- There are no tables for job requests, recurring schedules, availability exceptions, payouts, earnings, notifications, portfolios, service radii, or Worker preferences.
- The initial users migration defaults `role` to `user`, which is not an enum value. This must be resolved before relying on new Worker accounts.

## Worker UI Pages

All source-of-truth Figma exports are in `resources/views/worker/`:

- `sign_in_up.blade.php`: Worker sign-in and registration visual design.
- `dashboard.blade.php`: Pro workspace shell, overview, job requests, schedule summary, metrics, and navigation anchors.
- `bookings.blade.php`: Booking history layout, visually closer to the existing Customer workspace than the Worker workspace.
- `earnings.blade.php`: Earnings metrics, income chart, payout panel, and transaction history.
- `profile.blade.php`: Public profile, bio, services, rate, reviews, portfolio, and profile essentials.
- `schedule.blade.php`: Monthly calendar, confirmed/pending appointments, and regular working hours.
- `serviceArea.blade.php`: ZIP code, radius, neighborhood coverage, service preferences, and open-to-new-jobs state.
- `settings.blade.php`: Account details and notification preference controls.

## Reusable UI Structure

- Common visual shell: 1440px Figma canvas, stone-toned workspace background, white top bar, 224px sidebar, bordered white panels, teal primary actions, and small neutral metadata text.
- Common top navigation: PubFix brand, `PRO WORKSPACE` badge, help/support, notifications, avatar, Worker identity, and account menu.
- Common sidebar navigation: Overview, Job requests, My schedule, Earnings, Reviews, My public profile, Service area, and Settings.
- Common content patterns: page eyebrow, page title/subtitle, metric cards, bordered panels, status pills, tabs, filter controls, primary/secondary buttons, and footer links.
- Recommended reuse: create Worker-only Blade components or a Worker layout after the visual markup is understood. Keep the original class measurements, colors, spacing, borders, and typography intact.
- Do not reuse the existing customer `<x-layout>` blindly: it includes the customer navbar and customer-oriented page behavior.

## Interactive Elements and Dependencies

- Current links are primarily hash anchors in `dashboard.blade.php`; the other exports are mostly static markup.
- There are no Worker forms, CSRF fields, route actions, or backend-bound controls.
- Visual controls include availability toggles, sidebar navigation, request tabs, accept/decline actions, calendar month/week controls, date navigation, rate/radius sliders, service toggles, notification toggles, profile editing actions, and payout filters.
- Existing frontend dependencies are Vite, Laravel Vite Plugin, Tailwind CSS 4, and the Tailwind Vite plugin. `resources/js/app.js` is currently empty.
- The dashboard references `public/assets/css/dashboard.css` and `public/assets/img/*`, but `public/assets/` is not present in the repository.
- Several exports use external `placehold.co` images.

## Implementation Decisions

1. Treat the Figma exports as the visual source of truth; do not redesign, simplify, or modernize them.
2. Keep `Handyman` as the canonical Worker profile unless a later decision explicitly introduces a migration away from it.
3. Use role-aware Worker routes guarded by `auth` and `role:handyman`.
4. Prefer shared Worker layout/components for repeated shell and navigation markup, while keeping page-specific visual structures local.
5. Bind real data incrementally, starting with existing `User`, `Handyman`, `Booking`, `Category`, and `Review` records.
6. Add schema and backend behavior only after the UI/data contract is agreed; this progress step intentionally does not modify database files.
7. Keep customer routes and customer profile behavior isolated from Worker routes and Worker profile settings.

## Completed Steps

- Audited the Laravel project structure, manifests, routes, authentication, role middleware, controllers, models, services, policies, and migrations.
- Confirmed Laravel, PHP, Tailwind, and Vite setup from project files.
- Inspected all eight Worker Blade exports.
- Identified the shared Worker shell, navigation, repeated panel patterns, static controls, and frontend asset dependencies.
- Confirmed that no Worker backend workflow or route is currently implemented.
- Confirmed that no database files or backend logic were changed during this audit.
- Added render-only named routes for the Worker dashboard, bookings, earnings, profile, schedule, service area, settings, and sign-in/sign-up preview.
- Added a thin `WorkerController` that returns the existing Blade exports without database access or business logic.
- Added a reusable mobile Worker navigation partial with active route states.
- Added responsive Worker page hooks that allow the exported desktop canvas to shrink at smaller widths without changing the desktop composition.
- Wired the dashboard and Worker sign-in header links to named routes.
- Wired the remaining desktop sidebar labels to named Worker routes without changing their exported positioning or styling.
- Converted the Worker sign-in export's static account controls into semantic links, form fields, checkbox, and buttons.
- Added `WorkerController` actions that coordinate HTTP responses only.
- Added `WorkerWorkspaceService` under `app/Services/Worker` for existing Handyman, booking, review, and profile reads/updates.
- Added `UpdateWorkerProfileRequest` for Worker profile validation and authorization.
- Added `HandymanPolicy` for ownership checks on Worker profile operations.
- Added role-protected Worker routes and a profile update endpoint without changing the database schema.
- Added `WorkerWorkspaceTest` feature coverage for role isolation, workspace rendering, profile updates, and validation.
- Added real Worker dashboard statistics for pending requests, weekly jobs, confirmed upcoming work, and review rating.
- Added real Worker booking listing and detail rendering with CSRF-protected accept, decline, and completion forms.
- Added transactional booking transitions using row locks to prevent two Workers from accepting the same pending booking.
- Added Worker booking feature tests for accept, decline, completion, cross-Worker authorization, and invalid transitions.
- Added month-filtered Worker schedule data for confirmed and completed bookings, including upcoming appointment details.
- Added earnings-period data for completed jobs only, with explicit payment-data availability instead of fabricated totals.
- Added schedule and earnings feature tests for date filtering and payment-data behavior.

## Pending Tasks

- Decide whether Worker sign-up is separate from customer registration or role-aware within the existing auth flow.
- Define Worker route names, controller boundaries, and role-specific redirects.
- Define job-request lifecycle and whether requests are separate records or an extension of bookings.
- Define schedule, availability, service-area, notification, payout, and portfolio data requirements.
- Implement Worker policies and validation requests.
- Convert static exports to data-driven Blade pages without changing their appearance.
- Restore or replace missing local dashboard assets while preserving the original visual treatment.
- Add focused feature tests for authentication, authorization, job requests, bookings, profile updates, schedules, and earnings.

## Known Issues

- `Worker`, `JobRequest`, `WorkerService`, and `WorkerController` are empty.
- No Worker routes are registered.
- Login and Google authentication currently redirect to the shared home page and Google-created accounts default to customers.
- Existing booking authorization only covers the customer who created the booking.
- Current booking statuses do not include an explicit declined/rejected request state.
- The Worker UI contains hard-coded names, dates, counts, amounts, statuses, and locations.
- `bookings.blade.php` contains Customer-workspace content and should not be assumed to represent the final Worker booking workflow.
- The dashboard's referenced `public/assets` paths are currently unresolved.
- Fixed-width Figma markup will need responsive handling during integration, without altering the intended desktop design.
- Blade/route runtime validation requires the Composer dependencies, which are not currently installed in the workspace.
- Worker routes are now protected by `auth` and `role:handyman`; the sign-in/sign-up preview routes remain guest-only.
- Job-request decisions, schedules, earnings, notifications, service radius, payouts, and portfolio data remain unimplemented because the existing schema has no persistence for them.
- Declining uses the existing `cancelled` status because the current enum has no `declined` value; a future schema decision should distinguish Worker declines from customer cancellations.
- Job progress has no `in_progress` status or progress column, so the current workflow exposes confirmed details and supports completion only.
- Monthly earnings display `N/A` because the current schema has no payment or payout data.
- Schedule and earnings pages preserve the original Figma exports as fallback markup, while authenticated Worker routes render the real-data branches.
- Full PHPUnit, Artisan route, and Pint validation is blocked until the project runs on PHP 8.4.1+ or its locked dependency set is updated by the project owner.

## Short Implementation Plan

1. Finalize the Worker/Handyman naming and Worker authentication/registration contract.
2. Extract the shared Worker shell and sidebar into minimal Blade components/layouts, preserving the exported styling.
3. Bind the remaining profile, bookings, reviews, and dashboard sections to the service-provided data.
4. Design and implement the missing job-request, schedule, service-area, settings, and earnings persistence only after their contracts are agreed.
5. Add the corresponding authorization, validation, feature tests, and asset-path fixes.
6. Run Artisan, PHPUnit, Pint, and Vite checks on a compatible PHP/Node environment.
7. Compare every integrated page against the Figma exports at the target desktop and mobile widths.