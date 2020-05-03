<?php

namespace barrelstrength\sproutbasereports\visualizations;

use Craft;

class BarChartVisualization extends BaseVisualization implements VisualizationInterface
{

  protected $settingsTemplate = 'sprout-base-reports/visualizations/BarChart/settings.twig';

  protected $resultsTemplate = 'sprout-base-reports/visualizations/BarChart/visualization.twig';

  /**
   * @inheritdoc
   */

  public static function displayName(): string
  {
  }

  /**
   * @inheritdoc
   */
  public static function getVisualizationType(): string
  {
    return BarChartVisualization::class;
  }

}