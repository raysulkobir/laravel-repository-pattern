<?php

namespace App\Repositories\Interfaces;

interface SliderRepositoryInterface
{

    public function allSliders();
    public function storeSlider($data);
    public function findSlider($id);
    public function updateSlider($data, $id);
    public function destroySlider($id);
}
