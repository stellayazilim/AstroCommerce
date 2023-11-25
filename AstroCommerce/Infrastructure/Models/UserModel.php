<?php
namespace AstroCommerce\Infrastructure\Models;
use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use AstroCommerce\Infrastructure\Models;
use Illuminate\Database\Eloquent\Relations\HasMany;

class UserModel extends Model {
    use HasUuids, Authenticatable, CanResetPassword;
    protected $table = 'users';
    

    public function addresses(): HasMany {
        return $this->hasMany(Models\AddressModel::class);
    }

}
