<div class="sidebar">
    <ul>
        <li <?= $this->app->checkMenuSelection('AnalyticController', 'taskDistribution') ?>>
            <?= $this->modal->replaceLink(t('Task distribution'), 'AnalyticController', 'taskDistribution', array('project_id' => $project['id'])) ?>
        </li>
        <li <?= $this->app->checkMenuSelection('AnalyticController', 'userTaskDistribution') ?>>
            <?= $this->modal->replaceLink(t('User tasks repartition'), 'AnalyticController', 'userTaskDistribution', array('project_id' => $project['id'])) ?>
        </li>
        <li <?= $this->app->checkMenuSelection('AnalyticController', 'userScoreDistribution') ?>>
            <?= $this->modal->replaceLink(t('User scores repartition'), 'AnalyticController', 'userScoreDistribution', array('project_id' => $project['id'])) ?>
        </li>
        <li <?= $this->app->checkMenuSelection('AnalyticController', 'cfd') ?>>
            <?= $this->modal->replaceLink(t('Cumulative flow diagram'), 'AnalyticController', 'cfd', array('project_id' => $project['id'])) ?>
        </li>
        <li <?= $this->app->checkMenuSelection('AnalyticController', 'burndown_tasks') ?>>
            <?= $this->modal->replaceLink(t('Burndown chart(Tasks)'), 'AnalyticController', 'burndown_tasks', array('project_id' => $project['id'])) ?>
        </li>
        <li <?= $this->app->checkMenuSelection('AnalyticController', 'burndown') ?>>
            <?= $this->modal->replaceLink(t('Burndown chart(Score)'), 'AnalyticController', 'burndown', array('project_id' => $project['id'])) ?>
        </li>
        <li <?= $this->app->checkMenuSelection('AnalyticController', 'averageTimeByColumn') ?>>
            <?= $this->modal->replaceLink(t('Average time into each column'), 'AnalyticController', 'averageTimeByColumn', array('project_id' => $project['id'])) ?>
        </li>
        <li <?= $this->app->checkMenuSelection('AnalyticController', 'leadAndCycleTime') ?>>
            <?= $this->modal->replaceLink(t('Lead and cycle time'), 'AnalyticController', 'leadAndCycleTime', array('project_id' => $project['id'])) ?>
        </li>
        <li <?= $this->app->checkMenuSelection('AnalyticController', 'timeComparison') ?>>
            <?= $this->modal->replaceLink(t('Estimated vs actual time'), 'AnalyticController', 'timeComparison', array('project_id' => $project['id'])) ?>
        </li>

        <?= $this->hook->render('template:analytic:sidebar', array('project' => $project)) ?>
    </ul>
</div>
