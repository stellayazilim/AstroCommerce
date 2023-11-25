<?php
namespace AstroCommerce\Application\User\List;

use AstroCommerce\Application\User\List\UserListDto;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class UserListEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;


    public function __construct(
        public UserListDto $event
    ) { }



  
    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('user.list'),
        ];
    }
}
