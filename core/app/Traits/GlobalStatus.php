<?php

namespace App\Traits;

use App\Constants\Status;
use Illuminate\Database\Eloquent\Casts\Attribute;

trait GlobalStatus
{
    public static function changeStatus($id, $column = 'status')
    {
        try {
            $modelName = get_class();
            $query     = $modelName::findOrFail($id);
                       
            if (!isset($query->$column)) {
                throw new \Exception('Coluna não encontrada: ' . $column);
            }

            $newStatus = $query->$column == Status::ENABLE ? Status::DISABLE : Status::ENABLE;
            $query->$column = $newStatus;
    
            $query->save();
    
            $message = keyToTitle($column) . ' Alterado com Sucesso';
            $notify[] = ['success', $message];
            return back()->withNotify($notify);
        } catch (\Throwable $th) {
            $message = 'Erro: ' . $th->getMessage();
            $notify[] = ['error', $message];
            return back()->withNotify($notify);
        }
        
        
    }


    public function statusBadge(): Attribute
    {
        return new Attribute(
            get: fn () => $this->badgeData(),
        );
    }

    public function badgeData()
    {
        $html = '';
        if ($this->status == Status::ENABLE) {
            $html = '<span class="badge badge--success">' . trans('Enabled') . '</span>';
        } else {
            $html = '<span><span class="badge badge--warning">' . trans('Disabled') . '</span></span>';
        }
        return $html;
    }

    public function scopeActive($query)
    {
        return $query->where('status', Status::ENABLE);
    }

    public function scopeInactive($query)
    {
        return $query->where('status', Status::DISABLE);
    }
}
