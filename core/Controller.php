<?php
// core/Controller.php
class Controller
{
    protected function views(string $views, array $data = [])
    {
        extract($data);
        $viewFile = __DIR__ . '/../app/views/' . $views . '.php';
        if (!file_exists($viewFile)) {
            http_response_code(404);
            echo "Vista no encontrada: {$views}";
            return;
        }
        include __DIR__ . '/../app/views/layouts.php';
    }
    protected function redirect(string $path)
    {
        if (BASE_URL) {
            header('Location: ' . rtrim(BASE_URL, '/') . '/' . ltrim($path, '/'));
        } else {
            header('Location: ' . '/' . ltrim($path, '/'));
        }
        exit;
    }
    protected function h(?string $str): string
    {
        return htmlspecialchars((string)$str, ENT_QUOTES, 'UTF-8');
    }
}
