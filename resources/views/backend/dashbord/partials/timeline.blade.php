@foreach($paginatedActivities as $activity)
    <div class="timeline-item mb-4" style="position: relative;">
        <div class="timeline-marker" style="position: absolute; left: -45px; top: 0; width: 20px; height: 20px; border-radius: 50%; background: {{ $activity['color'] }}; border: 3px solid white; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
            <i class="{{ $activity['icon'] }}" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); font-size: 10px; color: white;"></i>
            @if(isset($activity['read']) && !$activity['read'] && $activity['type'] == 'Contact Form')
                <span class="notification-badge" style="position: absolute; top: -5px; right: -5px; width: 12px; height: 12px; background: #ff4757; border-radius: 50%; border: 2px solid white; animation: pulse 2s infinite;"></span>
            @endif
        </div>
        @if($activity['type'] == 'Contact Form' && isset($activity['id']))
            <a href="{{ route('contact-form.show', $activity['id']) }}" class="text-decoration-none">
                <div class="timeline-content hover-lift" style="background: white; padding: 15px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); border-left: 4px solid {{ $activity['color'] }}; cursor: pointer; transition: transform 0.3s ease;">
                    <h6 class="timeline-title mb-2" style="color: #333; font-weight: 600;">{{ $activity['type'] }} {{ $activity['action'] }}
                        @if(isset($activity['read']) && !$activity['read'])
                            <span class="badge bg-danger ms-2 pulse-badge" style="font-size: 0.7em; animation: pulse 2s infinite;">
                                <i class="bx bx-bell"></i> Baru
                            </span>
                        @endif
                    </h6>
                    <p class="timeline-text mb-2" style="color: #666; margin-bottom: 8px;">{{ $activity['title'] }}</p>
                    <small class="text-muted d-flex align-items-center">
                        <i class="bx bx-time-five mr-1"></i>
                        {{ $activity['time'] }}
                        <i class="bx bx-link-external ms-auto text-primary"></i>
                    </small>
                </div>
            </a>
        @else
            <div class="timeline-content" style="background: white; padding: 15px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); border-left: 4px solid {{ $activity['color'] }};">
                <h6 class="timeline-title mb-2" style="color: #333; font-weight: 600;">{{ $activity['type'] }} {{ $activity['action'] }}</h6>
                <p class="timeline-text mb-2" style="color: #666; margin-bottom: 8px;">{{ $activity['title'] }}</p>
                <small class="text-muted d-flex align-items-center">
                    <i class="bx bx-time-five mr-1"></i>
                    {{ $activity['time'] }}
                </small>
            </div>
        @endif
    </div>
@endforeach
