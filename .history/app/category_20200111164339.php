
namespace App;
use Illuminate\Database\Eloquent\Model;
class Menu extends Model
{
    protected $table = 'menus';
    public $primaryKey = 'id';
    public $timestamps = true;
}