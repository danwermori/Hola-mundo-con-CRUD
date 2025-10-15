<?php
class Mensaje{
    public static function all():array{
        $pdo = Database::getConnection();
        $st = $pdo->query("SELECT * FROM mensajes");
        return $st->fetchAll();
    }

    public static function find(int $id): ?array{
        $pdo = Database::getConnection();
        $st = $pdo->query("SELECT * FROM mensaje WHERE id_mensajes = ?");
        $st -> execute([$id]);
        $st = $st->fetch();
        return $st ?: null;
    }

    public static function create(array $d): int{
        $pdo = Database::getConnection();
        $st = $pdo->prepare("INSERT INTO mensajes (titulo, descripcion, imagen, fecha) VALUES (?, ?, ?, ?)");
        $st->execute([$d['titulo'], $d['descripcion'], $d['imagen'], $d['fecha']]);
        return (int)$pdo->lastInsertId();
    }

    public static function updateById(int $id, array $d): bool{
        $pdo = Database::getConnection();
        $st = $pdo->prepare("UPDATE mensajes SET titulo = ?, descripcion = ?, imagen = ?, fecha = ? WHERE id_mensajes = ?");
        $st->execute([$d['titulo'], $d['descripcion'], $d['imagen'], $d['fecha']]);
        return (int)$pdo->lastInsertId();
    }

    public static function deleteById(int $id): bool{
        $pdo = Database::getConnection();
        $st = $pdo->prepare("DELETE FROM mensajes WHERE id_mensajes = ?");
        $st->execute([$id]);
        return $st->rowCount() > 0;
    }
}