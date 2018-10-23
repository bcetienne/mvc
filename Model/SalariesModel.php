<?php
  namespace Model;
  /**
   * SalariesModel
   */
  class SalariesModel 
  {
    /**
     * Retrieve one salarie
     * 
     * @param string $col
     * @param string $val
     * @return bool|string $result
     */
    public function getOneSalarie($col, $val) {
      if (!$col || !$val) {
        return false;
      }
      $result = '';
      return $result;
    }

    /**
     * Return all salaries
     * 
     * @return string $results
     */
    public function getAllSalaries() {
      $results = '';
      return $results;
    }

    /**
     * Return all salaries order personnaly
     * 
     * @param string $order
     * @return bool|array $results
     */
    public function getAllSalariesOrderBy($order) {
      if (!$order) {
        return false;
      }
      $results = '';
      return $results;
    }
    
    /**
     * Update salarie with his id
     * 
     * @param int $id
     * @param array $datas
     * @return array|bool $result
     */
    public function updateSalarie($id, $datas) {
      if (!$id || !$datas) {
        return false;
      }
      $result = '';
      return $result;
    }

    /**
     * Remove one salarie
     * 
     * @param int $id
     * @return bool|array $result
     */
    public function removeSalarie($id) {
      if (!$id) {
        return false;
      }
      $result = '';
      return $result;
    }
  }