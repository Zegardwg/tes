<?php
    abstract class Mobil {
        protected $brand;
        protected $model;

        public function __construct($brand, $model) {
            $this->brand = $brand;
            $this->model = $model;
        }

        abstract public function start();
        abstract public function stop();
    }

    class Matic extends Mobil {
        public function start() {
            echo "Nyalakan mesin Mobil matic $this->brand $this->model <br>";
        }

        public function stop() {
            echo "Matikan mesin Mobil matic $this->brand $this->model <br><br>";
        }
    }

    class Sport extends Mobil {
        public function start() {
            echo "Nyalakan mesin Mobil sport $this->brand $this->model <br>";
        }

        public function stop() {
            echo "Matikan mesin Mobil sport $this->brand $this->model <br><br>";
        }
    }

    class OffRoad extends Mobil {
        public function start() {
            echo "Nyalakan mesin Mobil off-road $this->brand $this->model <br>";
        }

        public function stop() {
            echo "Matikan mesin Mobil off-road $this->brand $this->model <br><br>";
        }
    }

    class Moped extends Mobil {
        public function start() {
            echo "Nyalakan mesin Mobil moped $this->brand $this->model <br>";
        }

        public function stop() {
            echo "Matikan mesin Mobil moped $this->brand $this->model <br><br>";
        }
    }


    $matic = new Matic("Lamborgini", "Aventagor");
    $matic->start();
    $matic->stop();

    $sport = new Sport("Lamborgini", "Hight Light");
    $sport->start();
    $sport->stop();

    $moped = new Moped("Tesla", "X2phisi");
    $moped->start();
    $moped->stop();

    $offRoad = new OffRoad("Jeep ", "Cherokee");
    $offRoad->start();
    $offRoad->stop();

?>