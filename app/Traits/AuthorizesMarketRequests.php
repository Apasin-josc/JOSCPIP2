<?php

namespace App\Traits;

use App\Traits\ConsumeExternalServices;

trait AuthorizesMarketRequests
{
    use ConsumeExternalServices;
    /**
     * Resolve the elements to send when authorizing the request
     * @return void
     */
    public function resolveAuthorization(&$queryParams, &$formParams, &$headers)
    {
        $accessToken = $this->resolveAccessToken();

        $headers['Authorization'] = $accessToken;
    }

    /**
     * Resolve a valid access token to use
     * @return string
     */
    public function resolveAccessToken(){
        return 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiI0IiwianRpIjoiNzVlNDEwZjdkZTkxZThlNzQ3NzE3NDNhMjZiYjY4ZDhlZGY4ODBhMjU0OTE4YjYzYjZmMWQ0OGJlMzA5YmYyMTEzNzYxZmQxYTU5MTkwMWYiLCJpYXQiOjE3MDgyNzYzNTMuNTc2MDcyLCJuYmYiOjE3MDgyNzYzNTMuNTc2MDc1LCJleHAiOjE3Mzk4OTg3NTMuNTQ5NDQsInN1YiI6IjE0NjAiLCJzY29wZXMiOlsicHVyY2hhc2UtcHJvZHVjdCIsIm1hbmFnZS1wcm9kdWN0cyIsIm1hbmFnZS1hY2NvdW50IiwicmVhZC1nZW5lcmFsIl19.Nhc4hgPN0h2rrR5rn4HeZkD7uvsx0t8E56Fj4g5HP6TIIzkp2LLgpnQcS5eOdP-gVhhsX1hspwszEYukoEayyOrTsYJZie2H_JkFlZ7o4tD6eezRWDdXlGd8vDjY06mc9d7A14Gm3suV-_LttiLpjqcvg0E69cnc4_pTc9xFY7gJQFcXWGOdm0vU15UnoFU-gXT7kAe6Z2rjXMQtNxYt7e7v2zvLuWLab0pbUrt7XrJzifebGjnhRX5skad12RSAvOz50sXHn-9T3U2NCsTimFikevamws57w00hbtLGo7CzFANsrQdHlwhnEpE-8EHS6SvKGaqc5RTQcW-ukgI0eWjygmCx4ydvYvMWM8znkxUTK058nsuPh95I_FAswMbM-DBK9AMWxem9YPZGeMP5Yqp0pjCR86h-ObFqn_sGMVwhUZtSMkQ7Tu46IOThLttuPYGxmjPonpH3eHcWO0JDghkM_hex1ETqjfqS1zaiO6Tae3L92vmjz7OUPaXDS09ARBZnJhpRP-srrlK96caH3bBH3OP9F3k6KfFSc7UU9Phx5iclV4ZZS10xN3wLdIe0CPswiZ9LdX3Rdz8eK6qY5MHggjJl4kau7GBrNdWgSU3qIzO4B02yP74C9_j6t7wauB5bU74yzUd7n2JkLoZgKjkNS-h8KoZ3hghbO5ixFUo';
    }
}