<?php

namespace App\Routes;

use App\Controllers\Http\Vacancy\RealEstateVacancyController;

// Base vastgoed
\Routes::map('vacatures/vastgoed', [RealEstateVacancyController::class, 'route']);
\Routes::map('vacatures/vastgoed/regio/:reg', [RealEstateVacancyController::class, 'route']);
\Routes::map('vacatures/vastgoed/vakgebied/:vg', [RealEstateVacancyController::class, 'route']);
\Routes::map('vacatures/vastgoed/organisatie/:org', [RealEstateVacancyController::class, 'route']);

// Double vastgoed
\Routes::map('vacatures/vastgoed/regio/:reg/vakgebied/:vg', [RealEstateVacancyController::class, 'route']);
\Routes::map('vacatures/vastgoed/regio/:reg/organisatie/:org', [RealEstateVacancyController::class, 'route']);

\Routes::map('vacatures/vastgoed/vakgebied/:vg/regio/:reg', [RealEstateVacancyController::class, 'route']);
\Routes::map('vacatures/vastgoed/vakgebied/:vg/organisatie/:org', [RealEstateVacancyController::class, 'route']);

\Routes::map('vacatures/vastgoed/organisatie/:org/regio/:reg', [RealEstateVacancyController::class, 'route']);
\Routes::map('vacatures/vastgoed/organisatie/:org/vakgebied/:vg', [RealEstateVacancyController::class, 'route']);

// Triple vastgoed
\Routes::map('vacatures/vastgoed/regio/:reg/vakgebied/:vg/organisatie/:org', [RealEstateVacancyController::class, 'route']);
\Routes::map('vacatures/vastgoed/regio/:reg/organisatie/:org/vakgebied/:vg', [RealEstateVacancyController::class, 'route']);

\Routes::map('vacatures/vastgoed/organisatie/:org/vakgebied/:vg/regio/:reg', [RealEstateVacancyController::class, 'route']);
\Routes::map('vacatures/vastgoed/organisatie/:org/regio/:reg/vakgebied/:vg', [RealEstateVacancyController::class, 'route']);

\Routes::map('vacatures/vastgoed/vakgebied/:vg/organisatie/:org/regio/:reg', [RealEstateVacancyController::class, 'route']);
\Routes::map('vacatures/vastgoed/vakgebied/:vg/regio/:reg/organisatie/:org', [RealEstateVacancyController::class, 'route']);

// Paginated vastgoed
\Routes::map('vacatures/vastgoed/page/:pg', [RealEstateVacancyController::class, 'route']);
\Routes::map('vacatures/vastgoed/vakgebied/:vg/page/:pg', [RealEstateVacancyController::class, 'route']);
\Routes::map('vacatures/vastgoed/organisatie/:org/page/:pg', [RealEstateVacancyController::class, 'route']);
\Routes::map('vacatures/vastgoed/organisatie/:org/vakgebied/:vg/page/:pg', [RealEstateVacancyController::class, 'route']);

// Double paginated vastgoed
\Routes::map('vacatures/vastgoed/regio/:reg/vakgebied/:vg/page/:pg', [RealEstateVacancyController::class, 'route']);
\Routes::map('vacatures/vastgoed/regio/:reg/organisatie/:org/page/:pg', [RealEstateVacancyController::class, 'route']);

\Routes::map('vacatures/vastgoed/vakgebied/:vg/regio/:reg/page/:pg', [RealEstateVacancyController::class, 'route']);
\Routes::map('vacatures/vastgoed/vakgebied/:vg/organisatie/:org/page/:pg', [RealEstateVacancyController::class, 'route']);

\Routes::map('vacatures/vastgoed/organisatie/:org/regio/:reg/page/:pg', [RealEstateVacancyController::class, 'route']);
\Routes::map('vacatures/vastgoed/organisatie/:org/vakgebied/:vg/page/:pg', [RealEstateVacancyController::class, 'route']);

// Triple paginated vastgoed
\Routes::map('vacatures/vastgoed/regio/:reg/vakgebied/:vg/organisatie/:org/page/:pg', [RealEstateVacancyController::class, 'route']);
\Routes::map('vacatures/vastgoed/regio/:reg/organisatie/:org/vakgebied/:vg/page/:pg', [RealEstateVacancyController::class, 'route']);

\Routes::map('vacatures/vastgoed/organisatie/:org/vakgebied/:vg/regio/:reg/page/:pg', [RealEstateVacancyController::class, 'route']);
\Routes::map('vacatures/vastgoed/organisatie/:org/regio/:reg/vakgebied/:vg/page/:pg', [RealEstateVacancyController::class, 'route']);

\Routes::map('vacatures/vastgoed/vakgebied/:vg/organisatie/:org/regio/:reg/page/:pg', [RealEstateVacancyController::class, 'route']);
\Routes::map('vacatures/vastgoed/vakgebied/:vg/regio/:reg/organisatie/:org/page/:pg', [RealEstateVacancyController::class, 'route']);
