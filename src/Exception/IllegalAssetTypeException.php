<?php

namespace Drupal\dcx_integration\Exception;

class IllegalAssetTypeException extends \Exception {
  function __construct($id, $found_type, $expected_type) {
    $message = sprintf("DC-X document '%s' is of type '%s'. Expecting type '%s'.", $id, $found_type, $expected_type);
    parent::__construct($message);
  }
}
