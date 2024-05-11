import './bootstrap';
import sortable from './sortable.js'

import { Livewire, Alpine } from '../../vendor/livewire/livewire/dist/livewire.esm';

Alpine.plugin(sortable)

Livewire.start()
