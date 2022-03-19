import React, { useState } from 'react';
import { Col, Container, Row } from 'react-bootstrap';
import { Header } from './components/layout/Header/Header';
// import './App.css';
import BookList from './components/features/BookList/BookList';
import Sidebar from './components/layout/Sidebar/Sidebar';
import {booksData} from "./data/BooksRepo"
import { Book } from './interfaces/book';

function App() {
  const [books,setBooks] = useState(booksData);
  const addBook = (book:Book) => {
    setBooks([...books,book]);
    console.log(books);    
  }
  
  return (
    <Container>
      <Header />
      <Row>
        <Col className='col-9'>
        <main>
          <BookList books={books} addBook={addBook} />
        </main>
        </Col>
        <Col className='col-3'>
        <Sidebar books={books}/>
        </Col>
      </Row>
    </Container>
  );
}

export default App;
