<?php

namespace Database\Factories;

use App\Models\FeedBack;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FeedBack>
 */
class FeedBackFactory extends Factory
{
    public function __construct($data)
    {
        $this->data = $data;
    }

    protected $model = FeedBack::class;

    // Define the data for the feed back
    public function definition()
    {
        return [];
    }

    public function save()
    {
        // dd($this->data);
        if ($this->data['type'] == 'database') {
            $data = $this->data;
            $data['type'] = null;
            $newFB = Feedback::create($data);
            return $newFB;
        } elseif ($this->data['type'] == 'email') {
            $data = $this->data;
            $data['type'] = null;
            // Mail::to($this->data['email'])->send(new DataMail($this->data));
        }
    }

}