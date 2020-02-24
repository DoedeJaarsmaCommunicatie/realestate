<?php

namespace App\Routes;

use App\Controllers\Http\Vacancy\RealtorVacancyController;

// Base makelaar
\Routes::map('vacatures/makelaar', [RealtorVacancyController::class, 'route']);
\Routes::map('vacatures/makelaar/regio/:reg', [RealtorVacancyController::class, 'route']);
\Routes::map('vacatures/makelaar/vakgebied/:vg', [RealtorVacancyController::class, 'route']);
\Routes::map('vacatures/makelaar/organisatie/:org', [RealtorVacancyController::class, 'route']);

// Double makelaar
\Routes::map('vacatures/makelaar/regio/:reg/vakgebied/:vg', [RealtorVacancyController::class, 'route']);
\Routes::map('vacatures/makelaar/regio/:reg/organisatie/:org', [RealtorVacancyController::class, 'route']);

\Routes::map('vacatures/makelaar/vakgebied/:vg/regio/:reg', [RealtorVacancyController::class, 'route']);
\Routes::map('vacatures/makelaar/vakgebied/:vg/organisatie/:org', [RealtorVacancyController::class, 'route']);

\Routes::map('vacatures/makelaar/organisatie/:org/regio/:reg', [RealtorVacancyController::class, 'route']);
\Routes::map('vacatures/makelaar/organisatie/:org/vakgebied/:vg', [RealtorVacancyController::class, 'route']);

// Triple Makelaar
\Routes::map('vacatures/makelaar/regio/:reg/vakgebied/:vg/organisatie/:org', [RealtorVacancyController::class, 'route']);
\Routes::map('vacatures/makelaar/regio/:reg/organisatie/:org/vakgebied/:vg', [RealtorVacancyController::class, 'route']);

\Routes::map('vacatures/makelaar/organisatie/:org/vakgebied/:vg/regio/:reg', [RealtorVacancyController::class, 'route']);
\Routes::map('vacatures/makelaar/organisatie/:org/regio/:reg/vakgebied/:vg', [RealtorVacancyController::class, 'route']);

\Routes::map('vacatures/makelaar/vakgebied/:vg/organisatie/:org/regio/:reg', [RealtorVacancyController::class, 'route']);
\Routes::map('vacatures/makelaar/vakgebied/:vg/regio/:reg/organisatie/:org', [RealtorVacancyController::class, 'route']);

// Paginated makelaar
\Routes::map('vacatures/makelaar/page/:pg', [RealtorVacancyController::class, 'route']);
\Routes::map('vacatures/makelaar/vakgebied/:vg/page/:pg', [RealtorVacancyController::class, 'route']);
\Routes::map('vacatures/makelaar/organisatie/:org/page/:pg', [RealtorVacancyController::class, 'route']);
\Routes::map('vacatures/makelaar/organisatie/:org/vakgebied/:vg/page/:pg', [RealtorVacancyController::class, 'route']);

// Double paginated makelaar
\Routes::map('vacatures/makelaar/regio/:reg/vakgebied/:vg/page/:pg', [RealtorVacancyController::class, 'route']);
\Routes::map('vacatures/makelaar/regio/:reg/organisatie/:org/page/:pg', [RealtorVacancyController::class, 'route']);

\Routes::map('vacatures/makelaar/vakgebied/:vg/regio/:reg/page/:pg', [RealtorVacancyController::class, 'route']);
\Routes::map('vacatures/makelaar/vakgebied/:vg/organisatie/:org/page/:pg', [RealtorVacancyController::class, 'route']);

\Routes::map('vacatures/makelaar/organisatie/:org/regio/:reg/page/:pg', [RealtorVacancyController::class, 'route']);
\Routes::map('vacatures/makelaar/organisatie/:org/vakgebied/:vg/page/:pg', [RealtorVacancyController::class, 'route']);

// Triple paginated Makelaar
\Routes::map('vacatures/makelaar/regio/:reg/vakgebied/:vg/organisatie/:org/page/:pg', [RealtorVacancyController::class, 'route']);
\Routes::map('vacatures/makelaar/regio/:reg/organisatie/:org/vakgebied/:vg/page/:pg', [RealtorVacancyController::class, 'route']);

\Routes::map('vacatures/makelaar/organisatie/:org/vakgebied/:vg/regio/:reg/page/:pg', [RealtorVacancyController::class, 'route']);
\Routes::map('vacatures/makelaar/organisatie/:org/regio/:reg/vakgebied/:vg/page/:pg', [RealtorVacancyController::class, 'route']);

\Routes::map('vacatures/makelaar/vakgebied/:vg/organisatie/:org/regio/:reg/page/:pg', [RealtorVacancyController::class, 'route']);
\Routes::map('vacatures/makelaar/vakgebied/:vg/regio/:reg/organisatie/:org/page/:pg', [RealtorVacancyController::class, 'route']);
