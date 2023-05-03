<?php

namespace App\Http\Livewire;

use App\Models\LicenseCard;
use Livewire\Component;

class PostData extends Component
{
    public $search;
    protected $queryString = ['search'=> ['except' => '']];
    public $limitPerPage = 10;
    protected $listeners = [
        'post-data' => 'postData'
    ];
   
    public function postData()
    {
        $this->limitPerPage = $this->limitPerPage + 6;
    }
        public function render()
    {
        $posts = LicenseCard::latest()->paginate($this->limitPerPage);

        if ($this->search !== null) {
            $posts = LicenseCard::where('policeNumber','like', '%' . $this->search . '%')->orWhere('nameOfOwner','like', '%' . $this->search . '%')->orWhere('brandAndType','like', '%' . $this->search . '%')->orWhere('categoryAndModel','like', '%' . $this->search . '%')
            ->latest()->paginate($this->limitPerPage);
        }
        $this->emit('postStore');

        return view('livewire.post-data', ['posts' => $posts]);
    }
}
