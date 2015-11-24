 <?php
        class manager
        {
            private $name;
            private $store;
            private $productCat;
            private $phone;
            
            
            public function __construct($name, $store, $productCat, $phone)
            {
                $this->name = $name;
                $this->store = $store;
                $this->productCat = $productCat;
                $this->phone = $phone;
                
            }
            
            public function getName()
            {
                return $this->name;
            }
            public function getStore()
            {
                return $this->store;
            }
            public function getProductCategory()
            {
                return $this->productCat;
            }
            public function getPhone()
            {
                return $this->phone;
            }
        }
            
?>
    

