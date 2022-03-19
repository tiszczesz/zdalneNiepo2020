import { Card } from "react-bootstrap";
import { Book } from '../../../interfaces/book';
interface BookListProps{
    books: Book[]
}

const BookSummary = ({books}:BookListProps) => (
    <Card className="mt-3 p-1">
        <Card.Header className="bg-dark" style={{color:"white",fontWeight:"bold"}}>
            Podsumowanie informacji
        </Card.Header>
        <Card.Body className="bg-warning">
            Ilość książek w zbiorze: <b>{books.length}</b>
        </Card.Body>
    </Card>
)

export default BookSummary;