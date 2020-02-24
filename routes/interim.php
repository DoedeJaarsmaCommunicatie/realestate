<?php

namespace App\Routes;

use App\Controllers\Http\Vacancy\InterimVacancyController;

// Base interim
\Routes::map('vacatures/interim', [InterimVacancyController::class, 'route']);
\Routes::map('vacatures/interim/regio/:reg', [InterimVacancyController::class, 'route']);
\Routes::map('vacatures/interim/vakgebied/:vg', [InterimVacancyController::class, 'route']);
\Routes::map('vacatures/interim/organisatie/:org', [InterimVacancyController::class, 'route']);

// Double interim
\Routes::map('vacatures/interim/regio/:reg/vakgebied/:vg', [InterimVacancyController::class, 'route']);
\Routes::map('vacatures/interim/regio/:reg/organisatie/:org', [InterimVacancyController::class, 'route']);

\Routes::map('vacatures/interim/vakgebied/:vg/regio/:reg', [InterimVacancyController::class, 'route']);
\Routes::map('vacatures/interim/vakgebied/:vg/organisatie/:org', [InterimVacancyController::class, 'route']);

\Routes::map('vacatures/interim/organisatie/:org/regio/:reg', [InterimVacancyController::class, 'route']);
\Routes::map('vacatures/interim/organisatie/:org/vakgebied/:vg', [InterimVacancyController::class, 'route']);

// Triple interim
\Routes::map('vacatures/interim/regio/:reg/vakgebied/:vg/organisatie/:org', [InterimVacancyController::class, 'route']);
\Routes::map('vacatures/interim/regio/:reg/organisatie/:org/vakgebied/:vg', [InterimVacancyController::class, 'route']);

\Routes::map('vacatures/interim/organisatie/:org/vakgebied/:vg/regio/:reg', [InterimVacancyController::class, 'route']);
\Routes::map('vacatures/interim/organisatie/:org/regio/:reg/vakgebied/:vg', [InterimVacancyController::class, 'route']);

\Routes::map('vacatures/interim/vakgebied/:vg/organisatie/:org/regio/:reg', [InterimVacancyController::class, 'route']);
\Routes::map('vacatures/interim/vakgebied/:vg/regio/:reg/organisatie/:org', [InterimVacancyController::class, 'route']);

// Paginated interim
\Routes::map('vacatures/interim/page/:pg', [InterimVacancyController::class, 'route']);
\Routes::map('vacatures/interim/vakgebied/:vg/page/:pg', [InterimVacancyController::class, 'route']);
\Routes::map('vacatures/interim/organisatie/:org/page/:pg', [InterimVacancyController::class, 'route']);
\Routes::map('vacatures/interim/organisatie/:org/vakgebied/:vg/page/:pg', [InterimVacancyController::class, 'route']);

// Double paginated interim
\Routes::map('vacatures/interim/regio/:reg/vakgebied/:vg/page/:pg', [InterimVacancyController::class, 'route']);
\Routes::map('vacatures/interim/regio/:reg/organisatie/:org/page/:pg', [InterimVacancyController::class, 'route']);

\Routes::map('vacatures/interim/vakgebied/:vg/regio/:reg/page/:pg', [InterimVacancyController::class, 'route']);
\Routes::map('vacatures/interim/vakgebied/:vg/organisatie/:org/page/:pg', [InterimVacancyController::class, 'route']);

\Routes::map('vacatures/interim/organisatie/:org/regio/:reg/page/:pg', [InterimVacancyController::class, 'route']);
\Routes::map('vacatures/interim/organisatie/:org/vakgebied/:vg/page/:pg', [InterimVacancyController::class, 'route']);

// Triple paginated interim
\Routes::map('vacatures/interim/regio/:reg/vakgebied/:vg/organisatie/:org/page/:pg', [InterimVacancyController::class, 'route']);
\Routes::map('vacatures/interim/regio/:reg/organisatie/:org/vakgebied/:vg/page/:pg', [InterimVacancyController::class, 'route']);

\Routes::map('vacatures/interim/organisatie/:org/vakgebied/:vg/regio/:reg/page/:pg', [InterimVacancyController::class, 'route']);
\Routes::map('vacatures/interim/organisatie/:org/regio/:reg/vakgebied/:vg/page/:pg', [InterimVacancyController::class, 'route']);

\Routes::map('vacatures/interim/vakgebied/:vg/organisatie/:org/regio/:reg/page/:pg', [InterimVacancyController::class, 'route']);
\Routes::map('vacatures/interim/vakgebied/:vg/regio/:reg/organisatie/:org/page/:pg', [InterimVacancyController::class, 'route']);
