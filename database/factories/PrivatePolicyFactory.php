<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PrivatePolicy>
 */
class PrivatePolicyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $private_policy = [
            [
                'private_policy' => 'Lorem ipsum dolor sit amet. Ex galisum odio nam voluptatem nostrum et similique corporis aut modi quidem est magni accusamus. Qui iste incidunt aut aperiam quia ut sunt sint ut sunt magni est porro dolores. Est itaque internos sed quas quae eos repellendus temporibus At quibusdam consequatur qui autem minus. Qui minima autem vel officiis quaerat At omnis deleniti id deleniti fugit. Qui veritatis asperiores in asperiores voluptates ut sapiente numquam qui laboriosam reiciendis. Aut expedita consequatur rem voluptatem quia ut quasi quos eum fugiat doloremque qui eligendi ipsum et vero quae. Aut veritatis libero ex enim magni non nostrum soluta qui eaque veritatis.'
            ],
            [
                'private_policy' => 'Vel perferendis sequi et error itaque et dolore corporis qui vero nemo hic rerum laboriosam et voluptatibus odit. Aut consequuntur dolorum et mollitia iste ea voluptas dolore et quibusdam minus ut dolorum obcaecati non incidunt iste vel cumque illum! Sed consequatur necessitatibus nam enim sequi aut blanditiis eaque! Vel delectus ipsam est quos nostrum qui veniam reprehenderit. Aut enim enim eum temporibus quibusdam aut rerum animi est minima iste. Sed animi minus id quia delectus est voluptas distinctio quo itaque ratione. Est illo repellat aut omnis amet aut quia sequi et error facilis est tempora architecto est perspiciatis velit.'
            ],
            [
                'private_policy' => 'Vel perferendis sequi et error itaque et dolore corporis qui vero nemo hic rerum laboriosam et voluptatibus odit. Aut consequuntur dolorum et mollitia iste ea voluptas dolore et quibusdam minus ut dolorum obcaecati non incidunt iste vel cumque illum! Sed consequatur necessitatibus nam enim sequi aut blanditiis eaque! Vel delectus ipsam est quos nostrum qui veniam reprehenderit. Aut enim enim eum temporibus quibusdam aut rerum animi est minima iste. Sed animi minus id quia delectus est voluptas distinctio quo itaque ratione. Est illo repellat aut omnis amet aut quia sequi et error facilis est tempora architecto est perspiciatis velit.'
            ],
            [
                'private_policy' => 'Sit culpa harum aut inventore deserunt sit dignissimos dolores id omnis accusamus eos voluptas sint vel galisum placeat. Et similique dolorem hic culpa voluptatem est incidunt pariatur rem aliquam amet qui earum asperiores. Id sapiente consequatur aut omnis aliquid sed sunt facilis. Sit sunt voluptatum sit saepe harum aut laudantium maxime ea galisum tenetur ad doloribus illo. Sit culpa architecto sed ducimus voluptas est corporis totam.'
            ],
            [
                'private_policy' => 'Eos quasi velit et quisquam itaque ut galisum sint aut enim odio. Est aperiam dolores aut sint veniam et libero beatae ut magni dolore ut sequi reprehenderit. In cupiditate nulla id dolor explicabo id nostrum repudiandae et consectetur molestias non consequatur velit et quia tempore.'
            ],
        ];
        return [
            'body' => json_encode($private_policy),
        ];
    }
}
