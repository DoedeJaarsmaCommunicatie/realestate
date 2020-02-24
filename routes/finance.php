<?php

namespace App\Routes;

use App\Controllers\Http\Vacancy\FinanceVacancyController;

// Base finance
\Routes::map('vacatures/finance', [FinanceVacancyController::class, 'route']);
\Routes::map('vacatures/finance/regio/:reg', [FinanceVacancyController::class, 'route']);
\Routes::map('vacatures/finance/vakgebied/:vg', [FinanceVacancyController::class, 'route']);
\Routes::map('vacatures/finance/organisatie/:org', [FinanceVacancyController::class, 'route']);

// Double finance
\Routes::map('vacatures/finance/regio/:reg/vakgebied/:vg', [FinanceVacancyController::class, 'route']);
\Routes::map('vacatures/finance/regio/:reg/organisatie/:org', [FinanceVacancyController::class, 'route']);

\Routes::map('vacatures/finance/vakgebied/:vg/regio/:reg', [FinanceVacancyController::class, 'route']);
\Routes::map('vacatures/finance/vakgebied/:vg/organisatie/:org', [FinanceVacancyController::class, 'route']);

\Routes::map('vacatures/finance/organisatie/:org/regio/:reg', [FinanceVacancyController::class, 'route']);
\Routes::map('vacatures/finance/organisatie/:org/vakgebied/:vg', [FinanceVacancyController::class, 'route']);

// Triple finance
\Routes::map('vacatures/finance/regio/:reg/vakgebied/:vg/organisatie/:org', [FinanceVacancyController::class, 'route']);
\Routes::map('vacatures/finance/regio/:reg/organisatie/:org/vakgebied/:vg', [FinanceVacancyController::class, 'route']);

\Routes::map('vacatures/finance/organisatie/:org/vakgebied/:vg/regio/:reg', [FinanceVacancyController::class, 'route']);
\Routes::map('vacatures/finance/organisatie/:org/regio/:reg/vakgebied/:vg', [FinanceVacancyController::class, 'route']);

\Routes::map('vacatures/finance/vakgebied/:vg/organisatie/:org/regio/:reg', [FinanceVacancyController::class, 'route']);
\Routes::map('vacatures/finance/vakgebied/:vg/regio/:reg/organisatie/:org', [FinanceVacancyController::class, 'route']);

// Paginated finance
\Routes::map('vacatures/finance/page/:pg', [FinanceVacancyController::class, 'route']);
\Routes::map('vacatures/finance/vakgebied/:vg/page/:pg', [FinanceVacancyController::class, 'route']);
\Routes::map('vacatures/finance/organisatie/:org/page/:pg', [FinanceVacancyController::class, 'route']);
\Routes::map('vacatures/finance/organisatie/:org/vakgebied/:vg/page/:pg', [FinanceVacancyController::class, 'route']);

// Double paginated finance
\Routes::map('vacatures/finance/regio/:reg/vakgebied/:vg/page/:pg', [FinanceVacancyController::class, 'route']);
\Routes::map('vacatures/finance/regio/:reg/organisatie/:org/page/:pg', [FinanceVacancyController::class, 'route']);

\Routes::map('vacatures/finance/vakgebied/:vg/regio/:reg/page/:pg', [FinanceVacancyController::class, 'route']);
\Routes::map('vacatures/finance/vakgebied/:vg/organisatie/:org/page/:pg', [FinanceVacancyController::class, 'route']);

\Routes::map('vacatures/finance/organisatie/:org/regio/:reg/page/:pg', [FinanceVacancyController::class, 'route']);
\Routes::map('vacatures/finance/organisatie/:org/vakgebied/:vg/page/:pg', [FinanceVacancyController::class, 'route']);

// Triple paginated finance
\Routes::map('vacatures/finance/regio/:reg/vakgebied/:vg/organisatie/:org/page/:pg', [FinanceVacancyController::class, 'route']);
\Routes::map('vacatures/finance/regio/:reg/organisatie/:org/vakgebied/:vg/page/:pg', [FinanceVacancyController::class, 'route']);

\Routes::map('vacatures/finance/organisatie/:org/vakgebied/:vg/regio/:reg/page/:pg', [FinanceVacancyController::class, 'route']);
\Routes::map('vacatures/finance/organisatie/:org/regio/:reg/vakgebied/:vg/page/:pg', [FinanceVacancyController::class, 'route']);

\Routes::map('vacatures/finance/vakgebied/:vg/organisatie/:org/regio/:reg/page/:pg', [FinanceVacancyController::class, 'route']);
\Routes::map('vacatures/finance/vakgebied/:vg/regio/:reg/organisatie/:org/page/:pg', [FinanceVacancyController::class, 'route']);
