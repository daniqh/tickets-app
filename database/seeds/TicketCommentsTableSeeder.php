<?php

use App\Entities\TicketComments;

class TicketCommentsTableSeeder extends BaseSeeder
{
    protected $total = 250;

    public function getModel()
    {
        return new TicketComments();
    }

    public function getDummyData(\Faker\Generator $faker, array $customValues = array())
    {
        return [
            'comment' => $faker->paragraph(),
            'user_id' => $this->getRandom('User')->id,
            'ticket_id' => $this->getRandom('Ticket')->id,
            'link' => $faker->randomElement(['', '', $faker->url]),
        ];
    }
}
