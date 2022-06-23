<?php

namespace App\Http\Controllers\Mails;

use App\Http\Controllers\Controller;
use App\Mail\TestMail;
use App\Services\Cars\CarService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public CarService $carService;
    public function __construct(CarService $carService)
    {
        $this->carService = $carService;
    }
    public function sendEmail($id)
    {
        $car = $this->carService->show($id);
        $vin = $car->vin;
        $brand = $car->brand->name;
        $model = $car->model->name;
        $vin = $car->vin;
        $description = $car->description;
        $price = $car->price;
        $color = $car->color;
        $registration = $car->registration;
        $registrationDate = $car->registration_date;
        $details = [
            'title' => 'Samochód nr ' . $vin,
            'brand' => $brand,
            'model' => $model,
            'description' => $description,
            'color' => $color,
            'price' => $price,
            'registration' => $registration,
            'registration_date' => $registrationDate
        ];
        Mail::to('l_dutkiewicz@o2.pl')->send(new TestMail($details));
        return response()->json(["message" => "Wiadomosc wyslana"]);
    }
}
