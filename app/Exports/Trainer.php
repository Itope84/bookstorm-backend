<?

namespace App\Exports;

use App\User;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class Trainer implements FromView
{
    public function view(): View
    {
        return view('exports.trainer', [
            'entries' => User::all()
        ]);
    }
}
