<?php

namespace App\Routes;

use App\Controllers\Http\Vacancy\RealtorVacancyController;

// Base makelaardij
\Routes::map('vacatures/makelaardij', [RealtorVacancyController::class, 'route']);
\Routes::map('vacatures/makelaardij/regio/:reg', [RealtorVacancyController::class, 'route']);
\Routes::map('vacatures/makelaardij/vakgebied/:vg', [RealtorVacancyController::class, 'route']);
\Routes::map('vacatures/makelaardij/organisatie/:org', [RealtorVacancyController::class, 'route']);

// Double makelaardij
\Routes::map('vacatures/makelaardij/regio/:reg/vakgebied/:vg', [RealtorVacancyController::class, 'route']);
\Routes::map('vacatures/makelaardij/regio/:reg/organisatie/:org', [RealtorVacancyController::class, 'route']);

\Routes::map('vacatures/makelaardij/vakgebied/:vg/regio/:reg', [RealtorVacancyController::class, 'route']);
\Routes::map('vacatures/makelaardij/vakgebied/:vg/organisatie/:org', [RealtorVacancyController::class, 'route']);

\Routes::map('vacatures/makelaardij/organisatie/:org/regio/:reg', [RealtorVacancyController::class, 'route']);
\Routes::map('vacatures/makelaardij/organisatie/:org/vakgebied/:vg', [RealtorVacancyController::class, 'route']);

// Triple Makelaardij
\Routes::map('vacatures/makelaardij/regio/:reg/vakgebied/:vg/organisatie/:org', [RealtorVacancyController::class, 'route']);
\Routes::map('vacatures/makelaardij/regio/:reg/organisatie/:org/vakgebied/:vg', [RealtorVacancyController::class, 'route']);

\Routes::map('vacatures/makelaardij/organisatie/:org/vakgebied/:vg/regio/:reg', [RealtorVacancyController::class, 'route']);
\Routes::map('vacatures/makelaardij/organisatie/:org/regio/:reg/vakgebied/:vg', [RealtorVacancyController::class, 'route']);

\Routes::map('vacatures/makelaardij/vakgebied/:vg/organisatie/:org/regio/:reg', [RealtorVacancyController::class, 'route']);
\Routes::map('vacatures/makelaardij/vakgebied/:vg/regio/:reg/organisatie/:org', [RealtorVacancyController::class, 'route']);

// Paginated makelaardij
\Routes::map('vacatures/makelaardij/page/:pg', [RealtorVacancyController::class, 'route']);
\Routes::map('vacatures/makelaardij/vakgebied/:vg/page/:pg', [RealtorVacancyController::class, 'route']);
\Routes::map('vacatures/makelaardij/organisatie/:org/page/:pg', [RealtorVacancyController::class, 'route']);
\Routes::map('vacatures/makelaardij/organisatie/:org/vakgebied/:vg/page/:pg', [RealtorVacancyController::class, 'route']);

// Double paginated makelaardij
\Routes::map('vacatures/makelaardij/regio/:reg/vakgebied/:vg/page/:pg', [RealtorVacancyController::class, 'route']);
\Routes::map('vacatures/makelaardij/regio/:reg/organisatie/:org/page/:pg', [RealtorVacancyController::class, 'route']);

\Routes::map('vacatures/makelaardij/vakgebied/:vg/regio/:reg/page/:pg', [RealtorVacancyController::class, 'route']);
\Routes::map('vacatures/makelaardij/vakgebied/:vg/organisatie/:org/page/:pg', [RealtorVacancyController::class, 'route']);

\Routes::map('vacatures/makelaardij/organisatie/:org/regio/:reg/page/:pg', [RealtorVacancyController::class, 'route']);
\Routes::map('vacatures/makelaardij/organisatie/:org/vakgebied/:vg/page/:pg', [RealtorVacancyController::class, 'route']);

// Triple paginated Makelaardij
\Routes::map('vacatures/makelaardij/regio/:reg/vakgebied/:vg/organisatie/:org/page/:pg', [RealtorVacancyController::class, 'route']);
\Routes::map('vacatures/makelaardij/regio/:reg/organisatie/:org/vakgebied/:vg/page/:pg', [RealtorVacancyController::class, 'route']);

\Routes::map('vacatures/makelaardij/organisatie/:org/vakgebied/:vg/regio/:reg/page/:pg', [RealtorVacancyController::class, 'route']);
\Routes::map('vacatures/makelaardij/organisatie/:org/regio/:reg/vakgebied/:vg/page/:pg', [RealtorVacancyController::class, 'route']);

\Routes::map('vacatures/makelaardij/vakgebied/:vg/organisatie/:org/regio/:reg/page/:pg', [RealtorVacancyController::class, 'route']);
\Routes::map('vacatures/makelaardij/vakgebied/:vg/regio/:reg/organisatie/:org/page/:pg', [RealtorVacancyController::class, 'route']);
