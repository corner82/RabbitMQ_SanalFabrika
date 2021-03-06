<?php
/**
 * OSTİM TEKNOLOJİ Framework 
 *
 * @link      https://github.com/corner82/slim_test for the canonical source repository
 * @copyright Copyright (c) 2015 OSTİM TEKNOLOJİ (http://www.ostim.com.tr)
 * @license   
 */

namespace BLL\BLL;

/**
 * Business Layer class for report Configuration entity
 */
class InfoFirmMachineTool extends \BLL\BLLSlim{
    
    /**
     * constructor
     */
    public function __construct() {
        //parent::__construct();
    }
    
    /**
     * DAta insert function
     * @param array | null $params
     * @return array
     */
    public function insert($params = array()) {
        $DAL = $this->getDALManager()->get('infoFirmMachineToolPDO');
        return $DAL->insert($params);
    }
    
     
    
    /**
     * Check Data function
     * @param array | null $params
     * @return array
     */
    public function haveRecords($params = array()) {
        $DAL = $this->getDALManager()->get('infoFirmMachineToolPDO');
        return $DAL->haveRecords($params);
    }
    
    
    /**
     * Data update function
     * @param array | null $params
     * @return array
     */
    public function update($params = array()) {
        $DAL = $this->getDALManager()->get('infoFirmMachineToolPDO');
        return $DAL->update($params);
    }
    
    /**
     * Data delete function
     * @param array | null $params
     * @return array
     */
    public function delete( $params = array()) {
        $DAL = $this->getDALManager()->get('infoFirmMachineToolPDO');
        return $DAL->delete($params);
    }

    /**
     * get all data
     * @param array | null $params
     * @return array
     */
    public function getAll($params = array()) {
        $DAL = $this->getDALManager()->get('infoFirmMachineToolPDO');
        return $DAL->getAll($params);
    }
    
    /**
     * Function to fill datagrid on user interface layer
     * @param array | null $params
     * @return array
     */
    public function fillGrid ($params = array()) {
        $DAL = $this->getDALManager()->get('infoFirmMachineToolPDO');
        $resultSet = $DAL->fillGrid($params);  
        return $resultSet['resultSet'];
    }
    
    /**
     * Function to get datagrid row count on user interface layer
     * @param array | null $params
     * @return array
     */
    public function fillGridRowTotalCount($params = array()) {
        $DAL = $this->getDALManager()->get('infoFirmMachineToolPDO');
        $resultSet = $DAL->fillGridRowTotalCount($params);  
        return $resultSet['resultSet'];
    }
    
     /**
     * Data delete action function
     * @param array | null $params
     * @return array
     */
    public function deletedAct($params = array()) {
        $DAL = $this->getDALManager()->get('infoFirmMachineToolPDO');
        return $DAL->deletedAct($params);
    }
    
    /**
     * Data update function   
     * @param array $params
     * @return array
     */
    public function fillSingularFirmMachineTools($params = array()) {        
        $DAL = $this->getDALManager()->get('infoFirmMachineToolPDO');     
        return $DAL->fillSingularFirmMachineTools($params);
    }
    
    /**
     * Data update function   
     * @param array $params
     * @return array
     */
    public function fillSingularFirmMachineToolsRtc($params = array()) {     
        $DAL = $this->getDALManager()->get('infoFirmMachineToolPDO');
        return $DAL->fillSingularFirmMachineToolsRtc($params);
    }
    
     /**
     * Data update function   
     * @param array $params
     * @return array
     */
    public function fillUsersFirmMachines($params = array()) {        
        $DAL = $this->getDALManager()->get('infoFirmMachineToolPDO');     
        return $DAL->fillUsersFirmMachines($params);
    }
     
         /**
     * Data update function   
     * @param array $params
     * @return array
     */
    public function fillUsersFirmMachineProperties($params = array()) {        
        $DAL = $this->getDALManager()->get('infoFirmMachineToolPDO');     
        return $DAL->fillUsersFirmMachineProperties($params);
    }
    
      /**
     * Function to get datagrid row count on user interface layer
     * @param array | null $params
     * @return array
     */
    public function fillUsersFirmMachinesRtc($params = array()) {
        $DAL = $this->getDALManager()->get('infoFirmMachineToolPDO');
        $resultSet = $DAL->fillUsersFirmMachinesRtc($params);  
        return $resultSet['resultSet'];
    }

     
    
}

