<?php

namespace App\Events;

use App\User;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

use function Psy\debug;

class UserUpdated implements ShouldBroadcast
{
	use Dispatchable, InteractsWithSockets, SerializesModels;

	public $user;
	/**
	 * Create a new event instance.
	 *
	 * @return void
	 */
	public function __construct(User $user)
	{
		//
		$this->user = $user;
	}

	/**
	 * Get the channels the event should broadcast on.
	 *
	 * @return \Illuminate\Broadcasting\Channel|array
	 */
	public function broadcastOn()
	{
		//\Log::debug("User updated: {$this->user->name}");
		return new Channel('users');
	}
}