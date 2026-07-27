@include('user.header')

<!-- Start right Content here -->
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18 animate__animated animate__fadeInDown animate__faster">
                            🔔 AI Notifications Center
                        </h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                <li class="breadcrumb-item active">Smart Notifications</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <!-- Alert Section -->
            <div class="row">
                <div class="col-12">
                    @if (session('status'))
                        <div class="alert alert-success animate__animated animate__bounceIn" role="alert">
                            <i class="mdi mdi-check-circle-outline me-2"></i> {{ session('status') }}
                        </div>
                    @endif
                    @if($message = Session::get('success'))
                        <div class="alert alert-success animate__animated animate__bounceIn">
                            <i class="mdi mdi-check-circle-outline me-2"></i> {{ $message }}
                        </div>
                    @endif
                </div>
            </div>

            {{-- <!-- Statistics Cards -->
            <div class="row mb-4">
                <div class="col-md-3">
                    <div class="card ai-stats-card animate__animated animate__fadeInUp" style="animation-delay: 0.1s">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="sweet-icon bg-primary me-3">
                                    <i class="mdi mdi-bell-ring-outline display-6"></i>
                                </div>
                                <div>
                                    <h4 class="mb-0 ai-count" data-target="{{ $notifications->count() }}">0</h4>
                                    <p class="text-muted mb-0">Total Notifications</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card ai-stats-card animate__animated animate__fadeInUp" style="animation-delay: 0.2s">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="sweet-icon bg-success me-3">
                                    <i class="mdi mdi-email-open display-6"></i>
                                </div>
                                <div>
                                    <h4 class="mb-0 ai-count" data-target="{{ $notifications->where('read', false)->count() }}">0</h4>
                                    <p class="text-muted mb-0">Unread</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card ai-stats-card animate__animated animate__fadeInUp" style="animation-delay: 0.3s">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="sweet-icon bg-warning me-3">
                                    <i class="mdi mdi-alert-circle display-6"></i>
                                </div>
                                <div>
                                    <h4 class="mb-0 ai-count" data-target="{{ $notifications->where('priority', 'high')->count() }}">0</h4>
                                    <p class="text-muted mb-0">Important</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card ai-stats-card animate__animated animate__fadeInUp" style="animation-delay: 0.4s">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="sweet-icon bg-info me-3">
                                    <i class="mdi mdi-calendar-today display-6"></i>
                                </div>
                                <div>
                                    <h4 class="mb-0 ai-count" data-target="{{ $notifications->where('created_at', '>=', \Carbon\Carbon::today())->count() }}">0</h4>
                                    <p class="text-muted mb-0">Today</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

            <!-- Action Buttons -->
            {{-- <div class="row mb-4">
                <div class="col-12">
                    <div class="card animate__animated animate__fadeInUp" style="animation-delay: 0.5s">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="card-title mb-0">
                                    <i class="mdi mdi-cog-outline me-2"></i>Notification Actions
                                </h5>
                                <div class="d-flex gap-2">
                                    <button class="btn btn-outline-success ai-action-btn" onclick="markAllAsRead()">
                                        <i class="mdi mdi-email-open me-1"></i> Mark All as Read
                                    </button>
                                    <button class="btn btn-outline-danger ai-action-btn" onclick="clearAllNotifications()">
                                        <i class="mdi mdi-delete-sweep me-1"></i> Clear All
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

            <!-- Notifications List -->
            <div class="row">
                <div class="col-12">
                    <div class="card animate__animated animate__fadeInUp" style="animation-delay: 0.6s">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="card-title mb-0">
                                    <i class="mdi mdi-bell-ring-outline me-2"></i>Recent Notifications
                                </h4>
                                <div class="d-flex gap-2">
                                    <div class="dropdown">
                                        {{-- <button class="btn btn-outline-primary btn-sm dropdown-toggle ai-filter-btn" type="button" data-bs-toggle="dropdown">
                                            <i class="mdi mdi-filter me-1"></i> Filter
                                        </button> --}}
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#" onclick="filterNotifications('all')">All Notifications</a></li>
                                            <li><a class="dropdown-item" href="#" onclick="filterNotifications('unread')">Unread Only</a></li>
                                            <li><a class="dropdown-item" href="#" onclick="filterNotifications('today')">Today</a></li>
                                            <li><a class="dropdown-item" href="#" onclick="filterNotifications('important')">Important</a></li>
                                        </ul>
                                    </div>
                                    {{-- <button class="btn btn-outline-secondary btn-sm ai-refresh-btn" onclick="refreshNotifications()">
                                        <i class="mdi mdi-refresh me-1"></i> Refresh
                                    </button> --}}
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            @if($notifications->count() > 0)
                                <div class="ai-notifications-list">
                                    @foreach($notifications as $note)
                                    <div class="ai-notification-item animate__animated animate__fadeIn" 
                                         data-priority="{{ $note->priority ?? 'normal' }}" 
                                         data-read="{{ $note->read ? 'true' : 'false' }}" 
                                         style="animation-delay: {{ $loop->index * 0.1 }}s">
                                        <div class="notification-icon">
                                            @if($note->type == 'trade')
                                                <i class="mdi mdi-chart-line text-success"></i>
                                            @elseif($note->type == 'deposit')
                                                <i class="mdi mdi-arrow-down-circle text-primary"></i>
                                            @elseif($note->type == 'withdrawal')
                                                <i class="mdi mdi-arrow-up-circle text-warning"></i>
                                            @elseif(isset($note->priority) && $note->priority == 'high')
                                                <i class="mdi mdi-alert-circle text-danger"></i>
                                            @else
                                                <i class="mdi mdi-bell-outline text-info"></i>
                                            @endif
                                        </div>
                                        <div class="notification-content">
                                            <div class="notification-message">
                                                {{ $note->message }}
                                            </div>
                                            <div class="notification-time">
                                                <i class="mdi mdi-clock-outline me-1"></i>
                                                {{ $note->created_at->diffForHumans() }}
                                                • {{ $note->created_at->format('M j, Y • h:i A') }}
                                            </div>
                                        </div>
                                        {{-- <div class="notification-actions">
                                            @if(!$note->read)
                                                <button class="btn btn-sm btn-outline-primary ai-mark-read-btn" onclick="markAsRead('{{ $note->id }}')" title="Mark as read">
                                                    <i class="mdi mdi-check"></i>
                                                </button>
                                            @else
                                                <span class="badge bg-success ai-badge">Read</span>
                                            @endif
                                            <button class="btn btn-sm btn-outline-danger ai-delete-btn" onclick="deleteNotification('{{ $note->id }}')" title="Delete">
                                                <i class="mdi mdi-delete"></i>
                                            </button>
                                        </div> --}}
                                    </div>
                                    @endforeach
                                </div>
                            @else
                                <div class="text-center py-5 animate__animated animate__fadeIn">
                                    <div class="ai-empty-state">
                                        <i class="mdi mdi-bell-off-outline display-1 text-muted ai-float"></i>
                                        <h5 class="text-muted mt-3">No Notifications Yet</h5>
                                        <p class="text-muted mb-4">You're all caught up! New notifications will appear here.</p>
                                        <button class="btn btn-primary ai-action-btn" onclick="refreshNotifications()">
                                            <i class="mdi mdi-refresh me-2"></i> Check for Updates
                                        </button>
                                    </div>
                                </div>
                            @endif
                        </div>

                        <!-- Show total count instead of pagination -->
                        @if($notifications->count() > 0)
                        <div class="card-footer">
                            <div class="text-center text-muted">
                                Showing all {{ $notifications->count() }} notifications
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>

        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
</div>
<!-- end main content-->

</div>
<!-- END layout-wrapper -->

<style>
    /* Enhanced AI Animations for Notifications */
    .ai-pulse {
        animation: aiPulse 2s infinite;
    }

    @keyframes aiPulse {
        0% { transform: scale(1); }
        50% { transform: scale(1.05); }
        100% { transform: scale(1); }
    }

    .ai-pulse-border {
        position: relative;
        overflow: hidden;
    }

    .ai-pulse-border::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
        transition: left 0.5s;
    }

    .ai-pulse-border:hover::before {
        left: 100%;
    }

    .ai-action-btn {
        position: relative;
        overflow: hidden;
        transition: all 0.3s ease;
        border: none;
        border-radius: 8px;
        padding: 8px 16px;
        font-weight: 500;
    }

    .ai-action-btn::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
        transition: left 0.5s;
    }

    .ai-action-btn:hover::before {
        left: 100%;
    }

    .ai-action-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.2);
    }

    .ai-stats-card {
        transition: all 0.3s ease;
        border: 1px solid #e9ecef;
        position: relative;
        overflow: hidden;
    }

    .ai-stats-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(67, 97, 238, 0.1), transparent);
        transition: left 0.5s;
    }

    .ai-stats-card:hover::before {
        left: 100%;
    }

    .ai-stats-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(67, 97, 238, 0.15);
    }

    .ai-icon-pulse {
        animation: iconFloat 3s ease-in-out infinite;
    }

    @keyframes iconFloat {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-5px); }
    }

    /* Notifications List Styles */
    .ai-notifications-list {
        space-y: 12px;
    }

    .ai-notification-item {
        display: flex;
        align-items: flex-start;
        padding: 16px;
        border-radius: 12px;
        background: white;
        border: 1px solid #e9ecef;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
        margin-bottom: 12px;
    }

    .ai-notification-item:last-child {
        margin-bottom: 0;
    }

    .ai-notification-item::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        height: 100%;
        width: 4px;
        background: linear-gradient(180deg, #4361ee, #3a0ca3);
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .ai-notification-item:hover::before {
        opacity: 1;
    }

    .ai-notification-item:hover {
        transform: translateX(5px);
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        background: rgba(67, 97, 238, 0.02);
    }

    .ai-notification-item[data-priority="high"] {
        border-left: 4px solid #dc3545;
        background: rgba(220, 53, 69, 0.05);
    }

    .ai-notification-item[data-read="false"] {
        background: rgba(67, 97, 238, 0.05);
        border-left: 4px solid #4361ee;
    }

    .notification-icon {
        width: 40px;
        height: 40px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(67, 97, 238, 0.1);
        margin-right: 15px;
        flex-shrink: 0;
        transition: all 0.3s ease;
    }

    .ai-notification-item:hover .notification-icon {
        transform: scale(1.1);
        background: rgba(67, 97, 238, 0.2);
    }

    .notification-content {
        flex: 1;
        min-width: 0;
    }

    .notification-message {
        font-weight: 500;
        color: #2c3e50;
        margin-bottom: 4px;
        line-height: 1.4;
    }

    .notification-time {
        font-size: 0.875rem;
        color: #6c757d;
        display: flex;
        align-items: center;
    }

    .notification-actions {
        display: flex;
        gap: 8px;
        align-items: center;
        flex-shrink: 0;
        margin-left: 15px;
    }

    .ai-mark-read-btn, .ai-delete-btn {
        transition: all 0.3s ease;
        border-radius: 6px;
        width: 32px;
        height: 32px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .ai-mark-read-btn:hover {
        background: #28a745;
        color: white;
        transform: scale(1.1);
    }

    .ai-delete-btn:hover {
        background: #dc3545;
        color: white;
        transform: scale(1.1);
    }

    .ai-badge {
        animation: badgeGlow 3s infinite;
    }

    @keyframes badgeGlow {
        0%, 100% { box-shadow: 0 0 5px rgba(67, 97, 238, 0.3); }
        50% { box-shadow: 0 0 15px rgba(67, 97, 238, 0.6); }
    }

    .ai-float {
        animation: float 3s ease-in-out infinite;
    }

    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
    }

    .ai-empty-state {
        padding: 40px 20px;
    }

    /* Filter and Action Buttons */
    .ai-filter-btn, .ai-refresh-btn {
        transition: all 0.3s ease;
        border-radius: 6px;
    }

    .ai-filter-btn:hover, .ai-refresh-btn:hover {
        transform: translateY(-1px);
    }

    .ai-refresh-btn.rotating {
        animation: rotate 1s ease;
    }

    @keyframes rotate {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }

    /* Counting Animation */
    .ai-count {
        font-variant-numeric: tabular-nums;
    }

    /* Sweet Card Base Styles */
    .sweet-card {
        border: none;
        border-radius: 16px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        transition: all 0.3s ease;
        background: white;
    }

    .sweet-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
    }

    .sweet-icon {
        width: 60px;
        height: 60px;
        border-radius: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Number counting animation for stats
        const counters = document.querySelectorAll('.ai-count');
        
        counters.forEach(counter => {
            const target = parseInt(counter.getAttribute('data-target'));
            let current = 0;
            const increment = target / 50;
            
            const updateCount = () => {
                if (current < target) {
                    current += increment;
                    counter.textContent = Math.ceil(current).toLocaleString();
                    setTimeout(updateCount, 30);
                } else {
                    counter.textContent = target.toLocaleString();
                }
            };
            
            // Start counting when element is in viewport
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        updateCount();
                        observer.unobserve(entry.target);
                    }
                });
            });
            
            observer.observe(counter);
        });

        // Notification item animations
        const notificationItems = document.querySelectorAll('.ai-notification-item');
        notificationItems.forEach((item, index) => {
            item.style.animationDelay = `${index * 0.1}s`;
        });

        // Add hover effects to cards
        const cards = document.querySelectorAll('.ai-stats-card');
        cards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.zIndex = '10';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.zIndex = '1';
            });
        });

        // Random AI-like activity
        setInterval(() => {
            const badges = document.querySelectorAll('.ai-badge');
            badges.forEach(badge => {
                badge.style.animation = 'none';
                setTimeout(() => {
                    badge.style.animation = 'badgeGlow 3s infinite';
                }, 10);
            });
        }, 5000);
    });

    // Notification Actions
    function markAsRead(notificationId) {
        const item = document.querySelector(`[onclick="markAsRead('${notificationId}')"]`).closest('.ai-notification-item');
        item.style.animation = 'fadeOutLeft 0.5s ease';
        
        setTimeout(() => {
            // Here you would typically make an API call to mark as read
            item.setAttribute('data-read', 'true');
            item.querySelector('.ai-mark-read-btn').outerHTML = '<span class="badge bg-success ai-badge">Read</span>';
            item.style.animation = 'fadeInRight 0.5s ease';
            
            // Update counters
            updateNotificationCounters();
        }, 500);
    }

    function markAllAsRead() {
        const unreadItems = document.querySelectorAll('.ai-notification-item[data-read="false"]');
        unreadItems.forEach((item, index) => {
            setTimeout(() => {
                item.setAttribute('data-read', 'true');
                const readBtn = item.querySelector('.ai-mark-read-btn');
                if (readBtn) {
                    readBtn.outerHTML = '<span class="badge bg-success ai-badge">Read</span>';
                }
                item.style.animation = 'pulse 0.5s ease';
            }, index * 100);
        });
        
        setTimeout(() => {
            updateNotificationCounters();
            showToast('All notifications marked as read', 'success');
        }, unreadItems.length * 100 + 500);
    }

    function deleteNotification(notificationId) {
        const item = document.querySelector(`[onclick="deleteNotification('${notificationId}')"]`).closest('.ai-notification-item');
        item.style.animation = 'fadeOutRight 0.5s ease';
        
        setTimeout(() => {
            // Here you would typically make an API call to delete
            item.remove();
            updateNotificationCounters();
            showToast('Notification deleted', 'info');
        }, 500);
    }

    function clearAllNotifications() {
        const items = document.querySelectorAll('.ai-notification-item');
        if (items.length === 0) return;
        
        if (!confirm('Are you sure you want to clear all notifications?')) return;
        
        items.forEach((item, index) => {
            setTimeout(() => {
                item.style.animation = 'fadeOutRight 0.5s ease';
                setTimeout(() => item.remove(), 500);
            }, index * 50);
        });
        
        setTimeout(() => {
            updateNotificationCounters();
            showToast('All notifications cleared', 'info');
        }, items.length * 50 + 600);
    }

    function filterNotifications(filter) {
        const items = document.querySelectorAll('.ai-notification-item');
        items.forEach(item => {
            switch(filter) {
                case 'unread':
                    item.style.display = item.getAttribute('data-read') === 'false' ? 'flex' : 'none';
                    break;
                case 'today':
                    // This would need actual date comparison logic
                    const timeText = item.querySelector('.notification-time').textContent;
                    item.style.display = timeText.includes('hours ago') || timeText.includes('minutes ago') ? 'flex' : 'none';
                    break;
                case 'important':
                    item.style.display = item.getAttribute('data-priority') === 'high' ? 'flex' : 'none';
                    break;
                default:
                    item.style.display = 'flex';
            }
        });
        
        showToast(`Filtered: ${filter}`, 'info');
    }

    function refreshNotifications() {
        const refreshBtn = document.querySelector('.ai-refresh-btn');
        refreshBtn.classList.add('rotating');
        
        // Simulate API call
        setTimeout(() => {
            refreshBtn.classList.remove('rotating');
            showToast('Notifications refreshed', 'success');
            
            // Here you would typically reload notifications from server
            window.location.reload();
        }, 1000);
    }

    function updateNotificationCounters() {
        // Update counters based on current DOM state
        const totalItems = document.querySelectorAll('.ai-notification-item').length;
        const unreadItems = document.querySelectorAll('.ai-notification-item[data-read="false"]').length;
        
        // Update the counter displays
        document.querySelectorAll('.ai-count').forEach(counter => {
            const target = parseInt(counter.getAttribute('data-target'));
            if (target === totalItems) {
                counter.textContent = totalItems;
            }
        });
    }

    function showToast(message, type = 'info') {
        // Simple toast notification
        const toast = document.createElement('div');
        toast.className = `alert alert-${type} alert-dismissible fade show position-fixed`;
        toast.style.cssText = 'top: 20px; right: 20px; z-index: 9999; min-width: 300px;';
        toast.innerHTML = `
            <i class="mdi mdi-${type === 'success' ? 'check-circle' : type === 'danger' ? 'alert-circle' : 'information'} me-2"></i>
            ${message}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        `;
        
        document.body.appendChild(toast);
        
        // Auto remove after 3 seconds
        setTimeout(() => {
            if (toast.parentNode) {
                toast.remove();
            }
        }, 3000);
    }

    // Add CSS for animations
    const style = document.createElement('style');
    style.textContent = `
        @keyframes fadeOutLeft {
            from { opacity: 1; transform: translateX(0); }
            to { opacity: 0; transform: translateX(-100px); }
        }
        
        @keyframes fadeInRight {
            from { opacity: 0; transform: translateX(100px); }
            to { opacity: 1; transform: translateX(0); }
        }
        
        @keyframes fadeOutRight {
            from { opacity: 1; transform: translateX(0); }
            to { opacity: 0; transform: translateX(100px); }
        }
        
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
    `;
    document.head.appendChild(style);
</script>

@include('user.footer')