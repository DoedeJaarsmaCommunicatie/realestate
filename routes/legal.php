<?php

namespace App\Routes;

use App\Controllers\Http\Vacancy\LegalVacancyController;

// Base legal
\Routes::map('vacatures/legal', [LegalVacancyController::class, 'route']);
\Routes::map('vacatures/legal/regio/:reg', [LegalVacancyController::class, 'route']);
\Routes::map('vacatures/legal/vakgebied/:vg', [LegalVacancyController::class, 'route']);
\Routes::map('vacatures/legal/organisatie/:org', [LegalVacancyController::class, 'route']);

// Double legal
\Routes::map('vacatures/legal/regio/:reg/vakgebied/:vg', [LegalVacancyController::class, 'route']);
\Routes::map('vacatures/legal/regio/:reg/organisatie/:org', [LegalVacancyController::class, 'route']);

\Routes::map('vacatures/legal/vakgebied/:vg/regio/:reg', [LegalVacancyController::class, 'route']);
\Routes::map('vacatures/legal/vakgebied/:vg/organisatie/:org', [LegalVacancyController::class, 'route']);

\Routes::map('vacatures/legal/organisatie/:org/regio/:reg', [LegalVacancyController::class, 'route']);
\Routes::map('vacatures/legal/organisatie/:org/vakgebied/:vg', [LegalVacancyController::class, 'route']);

// Triple legal
\Routes::map('vacatures/legal/regio/:reg/vakgebied/:vg/organisatie/:org', [LegalVacancyController::class, 'route']);
\Routes::map('vacatures/legal/regio/:reg/organisatie/:org/vakgebied/:vg', [LegalVacancyController::class, 'route']);

\Routes::map('vacatures/legal/organisatie/:org/vakgebied/:vg/regio/:reg', [LegalVacancyController::class, 'route']);
\Routes::map('vacatures/legal/organisatie/:org/regio/:reg/vakgebied/:vg', [LegalVacancyController::class, 'route']);

\Routes::map('vacatures/legal/vakgebied/:vg/organisatie/:org/regio/:reg', [LegalVacancyController::class, 'route']);
\Routes::map('vacatures/legal/vakgebied/:vg/regio/:reg/organisatie/:org', [LegalVacancyController::class, 'route']);

// Paginated legal
\Routes::map('vacatures/legal/page/:pg', [LegalVacancyController::class, 'route']);
\Routes::map('vacatures/legal/vakgebied/:vg/page/:pg', [LegalVacancyController::class, 'route']);
\Routes::map('vacatures/legal/organisatie/:org/page/:pg', [LegalVacancyController::class, 'route']);
\Routes::map('vacatures/legal/organisatie/:org/vakgebied/:vg/page/:pg', [LegalVacancyController::class, 'route']);

// Double paginated legal
\Routes::map('vacatures/legal/regio/:reg/vakgebied/:vg/page/:pg', [LegalVacancyController::class, 'route']);
\Routes::map('vacatures/legal/regio/:reg/organisatie/:org/page/:pg', [LegalVacancyController::class, 'route']);

\Routes::map('vacatures/legal/vakgebied/:vg/regio/:reg/page/:pg', [LegalVacancyController::class, 'route']);
\Routes::map('vacatures/legal/vakgebied/:vg/organisatie/:org/page/:pg', [LegalVacancyController::class, 'route']);

\Routes::map('vacatures/legal/organisatie/:org/regio/:reg/page/:pg', [LegalVacancyController::class, 'route']);
\Routes::map('vacatures/legal/organisatie/:org/vakgebied/:vg/page/:pg', [LegalVacancyController::class, 'route']);

// Triple paginated legal
\Routes::map('vacatures/legal/regio/:reg/vakgebied/:vg/organisatie/:org/page/:pg', [LegalVacancyController::class, 'route']);
\Routes::map('vacatures/legal/regio/:reg/organisatie/:org/vakgebied/:vg/page/:pg', [LegalVacancyController::class, 'route']);

\Routes::map('vacatures/legal/organisatie/:org/vakgebied/:vg/regio/:reg/page/:pg', [LegalVacancyController::class, 'route']);
\Routes::map('vacatures/legal/organisatie/:org/regio/:reg/vakgebied/:vg/page/:pg', [LegalVacancyController::class, 'route']);

\Routes::map('vacatures/legal/vakgebied/:vg/organisatie/:org/regio/:reg/page/:pg', [LegalVacancyController::class, 'route']);
\Routes::map('vacatures/legal/vakgebied/:vg/regio/:reg/organisatie/:org/page/:pg', [LegalVacancyController::class, 'route']);
