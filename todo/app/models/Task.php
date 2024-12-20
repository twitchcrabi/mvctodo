<?php
class Task
{
    public static function all()
    {
        $db = Database::getInstance()->getPdo();
        $stmt = $db->query("SELECT * FROM tasks ORDER BY created_at DESC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function create($title)
    {
        
        $db = Database::getInstance()->getPdo();
        $stmt = $db->prepare("INSERT INTO tasks (title, created_at) VALUES (:title, NOW())");
        $stmt->bindParam(':title', $title);
        return $stmt->execute(); 
    }

    public static function markAsCompleted($id)
    {
        
        $db = Database::getInstance()->getPdo();
        $stmt = $db->prepare("UPDATE tasks SET is_completed = NOW() WHERE id = :id");
        $stmt->bindParam(':id', $id);
        return $stmt->execute(); 
    }

    public static function delete($id)
    {
        
        $db = Database::getInstance()->getPdo();
        $stmt = $db->prepare("DELETE FROM tasks WHERE id = :id");
        $stmt->bindParam(':id', $id);
        return $stmt->execute(); 
    }
}
?>


