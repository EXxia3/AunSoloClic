@props(['size' => 35, 'color' => 'gray'])

@php
    
    switch ($color) {
        case 'gray':
            
            $col = "#374151";

            break;

        case 'white':
            
            $col = "#ffffff";

            break;
        
        default:

            $col = "#374151";

            break;
    }

@endphp

<img src="data:image/png;base64,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">