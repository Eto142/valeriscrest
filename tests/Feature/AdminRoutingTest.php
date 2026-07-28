<?php

namespace Tests\Feature;

use App\Models\Admin;
use Tests\TestCase;

class AdminRoutingTest extends TestCase
{
    public function test_admin_root_redirects_to_login_for_guests(): void
    {
        $response = $this->get('/admin');

        $response->assertRedirect('/admin/login');
    }

    public function test_admin_root_redirects_to_dashboard_for_authenticated_admin(): void
    {
        $admin = new Admin([
            'id' => 1,
            'email' => 'admin@example.com',
            'password' => bcrypt('secret123'),
        ]);

        $this->actingAs($admin, 'admin');

        $response = $this->get('/admin');

        $response->assertRedirect('/admin/dashboard');
    }
}
