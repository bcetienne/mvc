<?php
  namespace Model;
  use Model\Model as Model;

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
     * NIN TRAVAILLE
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
      $prepare = $this->dbConnect->prepare('SELECT * FROM ' . $this->table . ';');
      $prepare->execute();
      $results = $prepare->fetchAll();
      if ($results !== null) {
          return $results;
      } else {
          return false;
      }
    }

    /**
     * Return all salaries order personnaly
     * NON TRAVAILLE - FONCTIONNE PAS
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
     * NON TRAVAILLE - FONCTIONNE PAS
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
     * NON TRAVAILLE - FONCTIONNE PAS
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