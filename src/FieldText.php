<?php

namespace Adaptcms\FieldText;

use Adaptcms\Base\Models\Package;

class FieldText
{
  /**
  * On Install
  *
  * @return void
  */
  public function onInstall()
  {
    Package::syncPackageFolder(get_class());
  }
}
