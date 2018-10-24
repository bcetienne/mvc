<?php
  namespace Model;
  use \Model\Model as Model;

  /**
   * SalariesModel
   */
  class SalariesModel extends Model
  {
      private $table = "salaries";
      function __construct()
      {
          parent::__construct();
      }
    /**
     * Retrieve one salarie
     * 
     * @param string $col
     * @param string $val
     * @return bool|string $result
     */
    public function getOneSalarie($col, $val) {
        $request = $this->dbConnect->prepare('SELECT * FROM ' . $this->table . ' WHERE ' . $col .' = :value');
        $request->execute(['value' => $val]);
        $result = $request->fetch();
        if ($result !== null) {
            return $result;
        } else {
            return false;
        }
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